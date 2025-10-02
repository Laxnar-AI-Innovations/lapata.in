<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class SupabaseStorage {
    private string $url;
    private string $key;
    private string $bucket;

    public function __construct() {
        $this->url = getenv('SUPABASE_URL') ?: '';
        $this->key = getenv('SUPABASE_SERVICE_ROLE') ?: getenv('SUPABASE_KEY') ?: '';
        $this->bucket = getenv('SUPABASE_BUCKET') ?: 'uploads';
    }

    public function uploadFile(string $pathInBucket, string $localTmpPath, string $contentType = 'application/octet-stream'): array {
        $pathInBucket = ltrim($pathInBucket, '/');
        if (strpos($pathInBucket, 'upload/') !== 0) {
            $pathInBucket = 'upload/'.$pathInBucket; // keep legacy structure
        }
        $endpoint = rtrim($this->url, '/')."/storage/v1/object/".rawurlencode($this->bucket)."/".$pathInBucket;
        $ch = curl_init($endpoint);
        $fh = fopen($localTmpPath, 'rb');
        curl_setopt_array($ch, array(
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_UPLOAD => true,
            CURLOPT_INFILE => $fh,
            CURLOPT_INFILESIZE => filesize($localTmpPath),
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer '.$this->key,
                'apikey: '.$this->key,
                'Content-Type: '.$contentType,
                'x-upsert: true'
            ),
            CURLOPT_RETURNTRANSFER => true,
        ));
        $response = curl_exec($ch);
        $err = curl_error($ch);
        $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        fclose($fh);
        curl_close($ch);
        if ($err || $status >= 300) {
            return ['status' => 'error', 'code' => $status, 'error' => $err ?: $response];
        }
        return [
            'status' => 'success',
            'publicUrl' => $this->getPublicUrl($pathInBucket)
        ];
    }

    public function getPublicUrl(string $pathInBucket): string {
        $pathInBucket = ltrim($pathInBucket, '/');
        if (strpos($pathInBucket, 'upload/') !== 0) {
            $pathInBucket = 'upload/'.$pathInBucket;
        }
        return rtrim($this->url, '/')."/storage/v1/object/public/".rawurlencode($this->bucket)."/".$pathInBucket;
    }
}

?>


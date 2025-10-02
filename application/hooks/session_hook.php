<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

function ensure_session_table() {
    $CI =& get_instance();
    if (!isset($CI->db)) {
        $CI->load->database();
    }
    try {
        $CI->db->query("CREATE TABLE IF NOT EXISTS ci_sessions (
            id varchar(128) NOT NULL,
            ip_address varchar(45) NOT NULL,
            timestamp bigint NOT NULL,
            data text NOT NULL,
            PRIMARY KEY (id)
        )");
        // For Postgres, create index if not exists
        $CI->db->query("CREATE INDEX IF NOT EXISTS ci_sessions_timestamp ON ci_sessions (timestamp)");
    } catch (Throwable $e) {
        // ignore; table may already exist
    }
}

?>


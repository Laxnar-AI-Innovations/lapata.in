<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Police extends CI_Controller {
	public function __construct()
    {
       parent:: __construct();
       date_default_timezone_set('Asia/Kolkata');
       error_reporting(0);
    }
    
    function test()
    {
        $client_secret = '760bd272aaff40996367'; // Replace with your actual client secret
        $clientid = 'MHA136549B'; // Replace with your actual client ID
        $uid_or_mobile = '377511144797'; // Replace with the actual UID or mobile number
        $ts = time(); // Replace with the actual timestamp
        // Concatenate the parameters
        $data = $client_secret . $clientid . $uid_or_mobile . $ts;
        
        // Generate the HMAC using SHA-256
        $hmac = hash_hmac('sha256', $data, $client_secret);
        
        // Output the result
        echo $ts.'-'.$hmac;
        die();
    }
    
    function test1()
    {
        $xmldata = '<?xml version="1.0" encoding="UTF-8" standalone="yes"?><Certificate><CertificateData><KycRes code="0107f69446684dabad901245f9e5fab0" ret="Y" ts="2024-06-04T14:54:03.230+05:30" ttl="2025-06-04T14:54:03" txn="UKC:e6efe20b22afcbf04e2655c0cf0263bb20240604145333"><UidData tkn="010022744ZMJK+5L71v18A2iHHIzmw01KibAxYsycCOoryyJKMjfCEBNrKyWTcab2GXxgsMI" uid="xxxxxxxx9527"><Poi dob="05-10-1996" gender="M" name="Hiren Javerchand Shah"/><Poa co="S/O Javerchand Shah" country="India" dist="Buldana" lm="Near Maheshwari Bhavan" loc="Sarafa" pc="444303" state="Maharashtra" vtc="Khamgaon"/><LData co="S/O  जवेरचंद शाह" country=" " dist="बुलडाणा" lang="13" lm="माहेश्वरी भवन जवळ" loc="सराफा" name="हिरेन जवेरचंद शाह" pc="444303" state="महाराष्ट्र" vtc="खामगाव"/><Pht>/9j/4AAQSkZJRgABAgAAAQABAAD/2wBDAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0aHBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgyPC4zNDL/2wBDAQkJCQwLDBgNDRgyIRwhMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjL/wAARCADIAKADASIAAhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQAAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSExBhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwDq160pGRUeaerZqSB6gCpBUWakSgCUc1IvFRg1IKYDxyakXio6cpoAnTrUoqBDzUwNIBaKXtR9KAGmkNOPHSmnrQA0nmlFApaAEppPNPpppDEFKBSc5p680gOdpw68U0GnA81QDxUqVEDxT0agCcVIpqEGnK2KYE9ANcrrfjzSdGeSDe1zdIGHlw4IVh0DNnjnjjJGDkVwet/EnVNSVobXFjFuBHkufMGOxfjv6AdMeuXYR7DPqNlYhTeXcFtkZHnSqnH4mqM3jDQLZ8SanCQehjy4P/fINfP7X0h5ZyewJNCagQMHk9hRYZ9Dw+LNAmhEw1e1RSMgTSCJv++Wwf0rVguIbqBJoJUlicZV42DKw9iK+aYL5zIGZ8/TgCtjTNcv7GQvp95LC2ckqxweCOV5DfiD0pWCx9BU0ivMNL+J1695DHeQ2z2yuFmdEZX2nuOTyOuMc4xkda9Is7+01G3E9ncJPETjchzg+h9D7GlYCxiiiloASkp1JSGJTl6001JGOaTGcxu46UoNMDA06qEPDZp4YdzUYoJCgknAoCw6e7htLaS4ncJFGpZmPQCvJvEfj++1KZ4rGSS1tckAI2Gce5GD+Hvg5p/jvxN/aMv9n2bv9niY+Yc8SMP6D/6/pXDK+1wxxxVpCsPkmb1O40inavQknqajM6bjt/Fj3oVg4wHGfSmMmlYBB3OOx6VW3ljgfjT2jIyucKKaI9ig46+1ICVWO3AyavQTHZtyPoKyyxzjJ/KpYZQh55pDNGGUxOSTgA9K6DRPEl3o12tzbylRuXzI+glUHJU/hu57Zrk9++TIBPsKeZGMhIP3R09KAPonRfFula0ESGfZOw4ik4J+h6H19fat3Oa+btPvZbeWKeFirowdSOxByDXuHhXxLH4j03zSqRXURCzxLkgHswyc7Tg9emCMnGTLQjou1FHagUhhUkY5pg61NGOlSwOQDDGR17inBsjoagXOOtPBPrVATbvY1ieLNTfS/D11PE22UgRxn/aJxx7gZP4Vs5b1rz/4naiRZ2lgMfM5lb8BgfzP5CmtwPOJZjuxniqkj+/SnsT5e7HNVWYc/wCcVYCM3y9aYHIPB5pv0o60rjsXIXY8swx71Y+dl+UAfSq9uyYw3TPQ1Zz5a8DP607isM2Z5LHH0pEH90jjsaRn4xjpSZHX5qm5XKyeORlPPTvirSlXjIVRk9cdqoowzz/OrluQSo7emeDQBcthx6AV0nhbWToOsxXLFjATsmVe6H2744P4ViTRJFGrqwywxjNTIucEDqwpXG0fRCSKyAqQQeQakrmPA16154Yt95LNCTDn2Xp+hFdMKlkDgKnjqBetTx9qljOKBpwNR96UHFWBLnINeR/EWXzPEWCx+SFVx6cn/HP4/SvWRzXjvxCiMXiOU7iQ6g9c9v0poRzD8pgKeahgh82bac4zT1JWNnJ56Cr+mWrsPNYYB6cUTlZFwjdkjaCsy5jYR8fXNSQ+HwuAW3H1xwK1YztTngVYjKt3/KuR1JHUqcSna+Ho24LZPbHSrSeGIxw0hJ9hxWtakcYq+B61LmyuRHNnw5CikgknPeoJ/D7GPMarn0JrqXXmmld3GKXPLcfIjgp9LnjzujNRRQvGQMHPvXfNErHDLmmS6THKB8gwfQVpGs+pnKijnVAeJN4GF4GT3p0UgkYInI9a09UsPsdtwOCMZ9az7SNViDDgEcVtGSauZONtD0j4Z3bG3v7Q/djdZFHqWBB/9BX869BBrzr4cWzRLeXRPyuVjVfpyT/KvRV5FNmT3HLjNWI+tQJ1qzF1pAcHSK3ODTScCk3dyKsRNkYry74mW5/tO3mGcNHjtjg/5/z19KLjqTgeteQa1cyahJdSzIMlt4YEnHtz+VHNYuMOYx7Gz+0zDcPkXk+9bUreSgCJubsopumQiO0U45bmp5C0R3YJzXPUl7x0U4WiZzLfPlnU+oXFJ9uubc4ZCB7ipVv7yS48iGJVY9N3FRQale3QkVrZZURd0m1furkDJ/EgfiKaTfQHZdTY07XEZ1VwAfWujS4V0XaRnvXDPbCKcqV2sDgjpg/StayknAUKeB29aynY1gdMZMY6YpCQelUxKxAyp9earvftExyvSs9zTRGj/wAtOuBVyKeNiEzgD9a46bVLuVykcZz6qM1JbXd8jDzEfHqRWip+ZlKaOq120a50t/LHzp831rk7fcyBGHIGK7PSrpL23+zzL82wg8/eHSuaisJm1P7GAPN3bSew9T9K1p6aGVRdT0jwdDJbaHFuP32LgegrronytYNnEsVqkIbG0AZQ4rWttwXk5rW5zsvrwc1Zh5qqvSp4jKOFj4/vE0mBwJbimkk0zeMUm6rELJII4Xc4wqkmvKrtM27KMDcMmvRtYuFg0q5JPLIUX6kYFeeTQsyBi3KjBHqKyqPY3orclt0Cxqo7KBVgR57VBCeBV+Jxt5Fc1S9zqprQh+wCU8qPrimyaPBCyzKkZlDbg+PmB/OtmFVZRgZNK9sHb+tEJWHJJmBLYlmE80rMw7EA5FWLCPHODjPpVy8iCbQe9RxnbgLipqSb0HCJqhQSny9RXP6g5E4RdiliQC5wBit22kcspwMr2pL2xImM6DAPXHvSg1fUJLQ42O/vPNaKNIgU75yzcgcD+Lr0A6ZNdBO99ptxHBMsc5ZAx8o5IPHBHUdeuMHseDh4sEeYu/zE9yea6TRoorWJlEafN145rZzj2M1GXcTRmju2jfywsi+3NP0qwDeK7u4ZTti+6c4GSP16/wCeK07W3SOUyKoXPXFSaVblUuZ5Bhppn4H90EqP0AP406b1Iqr3TYi56HNaMB6ZrNgRVAC5xWlAK3OVl1Bx1q/CMACqMfarcSv5g3NkdgBigR5pmjNMzRmrEZ2vWsl1ppEILPGwcKBktwQQPzz+FcLLIvIJ5zjFemVja/c2tnp80kwUSyqYkIA3EkfyHWplDmZpCpyqxx0RA4q/DzWYGAar9u/FctRanbTehpwS7DitAH5Mk81jxNhuTWgJxsGTxWaNGZ1wJLq628gLVuOOOGRUZgM1TvjMH8y3K57g8VnQWUzXQuHnZpgeAWOPpRa4r2O1ihh3K0ZO0dSRVrVI9sMUkeDFIAMjsf8AOa5C7m1AQmOB/LJ53AZrVsdVmbTPsk43SMV6dBg5z+WfzqeW2o7rYlEIzkVoWSlWAqopBrTshjBNC1Ea25IrVpDgKqliT6VPaKFtolXoFFZGqXJjsGjQbjJ8uMZGO9a2n7jZQb/vbRXRSOevsi/EMkVowCqUIya0YhxW5ystRCrcZGQDVWLpVmBFD7scnvQI8rDgHFO3jOTWZ9u80gRrgn++wGKbNK8igB9oJwdrDt16du31rTbcS12Lc2owQI7F87TggAnmuH8V3bvaG6IGWxjDZwD0H+etbFzPh1BZQgZQFHYZ9KytUs/tulSRx/6wRBhzycc4x79K1imlczk1cyo5d6hh3ANXYJSKxraUGFPYYq7DNg8muKpE9ClI2Uk/yac1yeg7VVWVStQO0hbAOwHuBXOo3Zu3oXjMz5BYD60+3XklXy47HvVWDT3lBMdwGPbctTi1vID80O8r3QitOWw4q+poQF1UscE55A7CtCIpKoxwawkkuw5K2koA6nGf0FWrW98x8YKt3B4qZQE9Ga65Vue1advIABWUJMkHvU5mKqAuNx4UE4yT0H41CWoN2RvW0EU5EsiByD8uen5VrocYrH067guIomjbbvBwjcMMEg8fUHkcehIrUV8Oo2tz3HQV2KPKrHBKXM7mhBWhFzWdDjitKJuenSmQWUzmrUR5qopyc96sRmgDwf7QkCPKseTnCj1boP6UwX7Z+SJnLYRVXJOOvHrnH8qmFm7RRJMoMjfO3PQccY/L8zUV/BbkgLHtwMHaP/rmu+Ki5WRyNyUPeMjUri4EkSvbyodrPyrA8DrzU8M8rKke+MNs5TdgKMep+X9az57S3lmfCMcHYCDgZ7np6Z/MVvW8EO50IDYGDgnP8sV0StZmSsrI4y+haxvmTYUVvnUex/p6U9GDqCDWt4i08iIyRgiNAGAZhxwc9PoK5qKcxNz909/SvOrQ6o9GhPoa8chGBmrHm7uDVCKQNjmrYUEZBGa4pKzO2LbLMV00ByAcVoQawoYbiQPQis2FF2jeoNXFso2GQoH9KV0aJyRpxaswJEbdRgmnOyS5kYDee9Zq2xjfg8dqmyQME0txNt6suRXXNZ97qrpqKxq0iPEQcKMZ9Rk+x+nJzjqH21xHJqEMCPnDguVTfnB+7j36E9qZfJPO/nkfvGCPIVAUKx5yo6nBJBPH3lHGSa6cPTSfNI5MRVbXKjbh8u8iM6LcEv8Au7hGlDAnGASNow3Az3IABB+XDv7Z1bTLkLJMzR5+UuuRIvYgke4zg8cHvinaTM7wq0zSb9qxtGpyAenHbkjrknnrir80alXjlR57Vhldhw0TYwCPzxjpnHHcdMpxi+6OWMZS9TW0zxFO9s0k0MTlFJOwlecZ/wBr2/MV0Gl6zb6gzQjMV1HxJC55B5Bwe+CrD145AyM8ppSpZwARyFtrYRjkYTsD16ZI4zn9A0ki+kCTqWyr7ugXHP8AMk1D5JbAlOPxHoyHFWYziua0PWvtyeTMCJl4LDoeuB9SB+h/HoEOBWL0NEeE/wBtLI8sltbXMspAXDgJkZzjIJIHPTHXmoZdQuCwB09yWGTl8+3oa0rFED4RATx2zn+lT/Z28xf3bBizL93v1/xq21CWiCN5xV2ciz3qvuS2ULGxcLJnnjvjHpUUepa2JUeO6iXepJXyxg849PbFdNLGwnZdnLZQgr0zx/WsWyiY3MMbIxBZogAPp2+rGupSuloc9tXqS3J1a8hJlt7aWMrl0TcN2eCM54rk7mza0kMbAmM/dbHB/wA5Fem2MD4UPgZJB3OOnfI/Cs/VtGguxcR7oV3Zw2CTuwCD+p59iKxnJ35WawSSUkefKzwHjlavwXqkYJ/OoVhZJZLaddssZwwI/WlNmQMhciuadk7M64NtXRq292qnnmrn24EDBrn0iI4yw+hqxgRoWdjgeprPlibc0jbOoIq8kDA9axbrV5L2b7PbSNHGc7pQMngdh+nbnvWeTcarI0VsuIU++3bHua2rLTIhtMZZIiVx5g+VgFyckdTkkDjGDnjpXTSoJas5atdv3YkD3U+jywpZxqrkBgz5LL6enPr/AEq7b6rq5HEVtImTtVlIHcHuM8MarzSo93FO+QTMoHPIWt7w/plzO0O60Miphthz3Jz0wc4Vj17V1+xS95nH7aXwlmws71iJibKN3OAqozYwcd3+v55rcaG6hM63LxSBlO9pFO09cAYJB7Zyc/nUNjEqXLRlZEMJYfujvAyxYYVuvCnq3cfjQ1a+ltbdvLlEsUhCsw6BRhsEdQS2frk4zgGmqaloyJSlHVMvfaLxYUEPloCMyZIPpxz14ouTe+YjMyhVxjHHHIzjpzn9Khiu4vMjYMQoUBQw7YHU8Ut1cDy3ZXBB29DjHPSueph2paG1PEXi+Yvabdi2LyuxVF+844IJwBgjnPLV6JpF+b6xSVgFcgZAYEHIBBHsf8evWvHTLNObWG3+YvI+V253H5cfzPHfNei6ZbSWul3EdvMQQjbXccklcZP/AALOPr9KK1NQimxUpucmkcRZmUsPm2qRj5cAVPtQSkE5YMDjPJzxWfacTFSyqPU5q88TGY/fyE3LtQ87Tn2qqlF8+rJp11yaIiuoyhWRJXUZ5GSK5qaNo7i4Yv8AvEcSB9wzjJHB/wCBA/hXYSJDJbDLxk5I5nUH16Gubv7dQV/eRsXBjbDBhntyD6gcVpSpvltcmdZKd2tzTspY5FL71GcNjBwAeSB+Oa0JljZFlAPKZAx3HX9Ca5/SxJ5SBjIdpKnahJAz/wDXNbkbKYOq7kbPzuAcd8r16GlVoaqTYU8RvFI4/wAV2S280WpwjkERyLjqOxJ/z1FQwKJY1YDhhmuj1eCC9sLm0Rwd6HaQCMkYK5z2yAPwP48nok261KE8of0rnxFO0E10OvDVW5NMuSRJGpLAVkLZTazqa2cCu2ckgdFX+8fpx9enU1f1G527Y0DO7naqqMknpxXS6Hpx0qyZWdFvp2BI7D2B9sk/UmsaMbLmZtWn9lDbTRrfT7YWUK7okO6ZyfmZu4P+f65Ze+XJC+1VRCPkA6he2cda03YlPKZd8KHLkHIY/wBazrqA3c8IO2NJDnlv4QcZ+lddOo29UcNSlbZlbSbQ3EzyXI3pBypdM5bjuRnGAeK7W0VrKx85o1DhQoUjapOMdsfxFvzrL0S2mS0J3RbppN/+sHIBJHf3rYv2l8uOFg3AyCec+n6mqq15WtbcUKMXJu+wkW2LR2Mi/M6MQG5BGBjGORxjpXJ6paF3knhY5KjLZ/2z+nQc1180kLwIgG1QojA6cEEd/pXNamCLeEq20siL7ECQjr+B/wDr1VGsrNvQipRakuVlbypVI3QRtnHzqNuOOg2/Lx9KgnBluUSNHw2CAzhs9eeg9v1rWjV1lXcihgBwBjFMmEj3q7zkgAcnPQn/ABq5zXMRTUrPQmSwliktJVkVyWOWLH5OeO3oD+Irt4nS5jtoD+8VnE7+2znP4MB/PPWuYuzJapA20MxVl2uPvAkHB5zjgdO4HQ4q5p5e2SBlmDLITIytk8qv3DjjoH/EKcVlVaqRSNKa9nK/U45JZS/zahC3zdCZCBjp/DU8kal0BuYST12q2cYHPIFFFdNVaoypfCxwELwrvkuCdq5KwKQBxyfmHb2rPuoI/sk8ZuJyAA5H2cDnoB9444zRRTpLVk1XsZdsVNxGW80mUZPRRnJHp3wfzrbtTI7hQsjKGxnzApz+Xp+dFFXJe6LmtNDpoVi+Z7diwLIQ8mRjtjGD0P44P0rlI7SW21i7RduwvwFP975hj6AjNFFcs0pR1OinJqWhqaHYE6vPeXYX9wSkYPIz3Ix7Hj6+1dTFDJPIowSzAAKMHA+g6UUVjKnHlLVWXMOuIYWeK3C4VTtOMHk+n4An8qoXTW898VtwwLKsKYTHsxHP+d1FFXCCUUkJ1G5Ns17SKASeSmFRfkG5cZ4BzVppPOuC6vtViMLn8cc0UVhWXvbmlF3jsTF51WNZG3BpFUB1zxznrWLqf2d40V4vLZYAFaPkHEvGQfrRRRRk+VIqrFc1yZFbeuyRCGwTg46qPWpmRzOA23aBn72eAQaKKVZJSRNGT5WM1mWWO/srYsgLQBlK8nO4gY79v5VNLqDRiC2tkBxJ58hJxt52jnpjLc/h60UV1UUvZI5638d+h//Z</Pht></UidData></KycRes></CertificateData><Signature xmlns="http://www.w3.org/2000/09/xmldsig#"><SignedInfo><CanonicalizationMethod Algorithm="http://www.w3.org/2001/10/xml-exc-c14n#"/><SignatureMethod Algorithm="http://www.w3.org/2000/09/xmldsig#rsa-sha1"/><Reference URI=""><Transforms><Transform Algorithm="http://www.w3.org/2000/09/xmldsig#enveloped-signature"/></Transforms><DigestMethod Algorithm="http://www.w3.org/2001/04/xmlenc#sha256"/><DigestValue>2AHjj2zDs3F1JhxdvItuY2/hQw0Fn2es3ToShokdDGg=</DigestValue></Reference></SignedInfo><SignatureValue>DuLRcK3mJwb4lsqlf7l8Mg2phDJG4YUa3mgXp+soAogD31nSZ7Rpw3yhldIldIyiLZ2ZYhCf5syQgHIiWf2rsOhHfSVGtodGG8ChrgAXhzDb9tw0BC0q1aDUzVpp7ln5qNFPvjQQoWia4vpuP0A338l5yWOvz7bW03QDDS8x2Hl/Vd9JDNx1t85kAyuDhpIWShHhBujnR5zAv0eu2e/10HVHWgRaQY+MiJ+cZFwkbl/gZedXgNmb0xjBQso42kxMpcTNkj4UBZeXNvyA5barL9406RJx84pyzA+Q1Yx8bl8SVIZD0lDd8mL9Zzde13lhwJ2DSb/92qI40gRBnyF/KQ==</SignatureValue><KeyInfo><X509Data><X509SubjectName>CN=DS NATIONAL E-GOVERNANCE DIVISION 1,ST=DELHI,postalCode=110003,OU=NATIONAL E-GOVERNANCE DIVISION,O=NATIONAL E-GOVERNANCE DIVISION,C=IN</X509SubjectName><X509Certificate>MIIFUjCCBDqgAwIBAgIHAJnuuyguVTANBgkqhkiG9w0BAQsFADB3MQswCQYDVQQGEwJJTjEiMCAGA1UEChMZU2lmeSBUZWNobm9sb2dpZXMgTGltaXRlZDEPMA0GA1UECxMGU3ViLUNBMTMwMQYDVQQDEypTYWZlU2NyeXB0IHN1Yi1DQSBmb3IgRG9jdW1lbnQgU2lnbmVyIDIwMjIwHhcNMjMwODIyMDgyMTQ2WhcNMjYwMjExMDc1NzI4WjCBrjELMAkGA1UEBhMCSU4xJzAlBgNVBAoTHk5BVElPTkFMIEUtR09WRVJOQU5DRSBESVZJU0lPTjEnMCUGA1UECxMeTkFUSU9OQUwgRS1HT1ZFUk5BTkNFIERJVklTSU9OMQ8wDQYDVQQREwYxMTAwMDMxDjAMBgNVBAgTBURFTEhJMSwwKgYDVQQDEyNEUyBOQVRJT05BTCBFLUdPVkVSTkFOQ0UgRElWSVNJT04gMTCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANOK+NVHpaQfOWhrtKHkN07+tVnWQ7cILkVSBTElDgalJsMBqvGv4NnsuCMCrMNtJs+kqvcIfbY210y9bj/WtMIv8EaQWzDInMeYKuP8QWdFa8oAkB1WLrJMy5naxE+99U4tHWk44497q783r168wT4av/XF0YSnkMBIeoZY5OewsQpOQCVSg9ouf1Uc3TwsBqomhJRPNxPK9QJ1gkfZQBwyTirXM6AHWVyzQY1GQWBXpAbMqSEqmvxrDHfC/g0I2SpDtJlUf59hTLUe5E+IrR2Xxls4QU3DqBS9GQAqc/O5wuRqw2j3OI3k7deZTmkaQDlbftYuBA3vUnndaRUgEjUCAwEAAaOCAakwggGlMBMGA1UdIwQMMAqACEzEC7kvPc60MBEGA1UdDgQKBAhHY4kJC0TLGDCBlwYIKwYBBQUHAQEEgYowgYcwRQYIKwYBBQUHMAKGOWh0dHBzOi8vd3d3LnNhZmVzY3J5cHRuZXcuY29tL1NhZmVTY3J5cHREb2NTaWduZXIyMDIyLmNlcjA+BggrBgEFBQcwAYYyaHR0cDovL29jc3Auc2FmZXNjcnlwdC5jb20vU2FmZVNjcnlwdERvY1NpZ25lcjIwMjIwRwYDVR0fBEAwPjA8oDqgOIY2aHR0cDovL2NybDIuc2FmZXNjcnlwdC5jb20vU2FmZVNjcnlwdERvY1NpZ25lcjIwMjIuY3JsMCcGA1UdIAQgMB4wCAYGYIJkZAIDMAgGBmCCZGQCAjAIBgZggmRkCgEwDAYDVR0TAQH/BAIwADAqBgNVHSUEIzAhBggrBgEFBQcDBAYJKoZIhvcvAQEFBgorBgEEAYI3CgMMMCUGA1UdEQQeMByBGmRuYXlha0BkaWdpdGFsaW5kaWEuZ292LmluMA4GA1UdDwEB/wQEAwIGwDANBgkqhkiG9w0BAQsFAAOCAQEAfmebPU8awacmsPZGr7M63sAuHdmbfIQDI3ZmUFBc0IRA1LSFcYCTDixhBXEYmpbB1gqSIC6kM2FsT42ZGwKaGZVBc/zryDJgJ8cr5EJyNA6cmRCk9fCSjXMvXJo4pZ1lSh+eAKWNbLkCdtFm4XZWpYU2UYI+wU6v5ZGWaNsNLOh05P9Eigoutfy0lhvZgE0gRXv8OgI6sSSJQW2uoVmUEDorX44cCqPLuCUIuq48G9xPpuHh2sH/RyVkAysGtN7TkmbZrqeVOSn+KVYbdyBWEF3zYUvPBndpXQUiKMG4kdYjvK08FZAfrF7fCYqyym+jKRBezoaS3AS67QiO4uTSyg==</X509Certificate><X509SubjectName>CN=CCA India 2022,O=India PKI,C=IN</X509SubjectName><X509Certificate>MIIFNDCCAxygAwIBAgIQdiQz69smdlqFYM0KqC/hFzANBgkqhkiG9w0BAQsFADA6MQswCQYDVQQGEwJJTjESMBAGA1UEChMJSW5kaWEgUEtJMRcwFQYDVQQDEw5DQ0EgSW5kaWEgMjAyMjAeFw0yMjAyMDIxMjA0MzdaFw00MjAyMDIxMjA0MzdaMDoxCzAJBgNVBAYTAklOMRIwEAYDVQQKEwlJbmRpYSBQS0kxFzAVBgNVBAMTDkNDQSBJbmRpYSAyMDIyMIICIjANBgkqhkiG9w0BAQEFAAOCAg8AMIICCgKCAgEAv3EBudWC8HY0oSwtJZCqpjQTGpEewl3EdDqUORV0qoFp78mdR/vuATXI83G7nF9RLvmNjgQgKr/bMx6gPO4Y57bMjAsgwEzleFclZka/sqc68iN5rS3huhrCX6MEINLyDOQ71MRA7GJCaNL6E3j1438eTu011mlikeZYBdkhvfpAVjCw90w8wcWDmqx66Y561T/RiXyz2uEhBBZAD43gV58eXStOeOTwAzEZYMrmp232GfmQKabYRfdIRus1avyuGea2nICEsRHE8M2tdzwpGP7oIy2qHBFJJ+3AwmwQA4DjmDkJtCD+58awohQavRNhqjsGD+ZifG3VR4i6WrKv8OWqZzcZj3g3Elr5+fRMlz1GSqkWPBw1Ev8KWTHazSUKF7OMxm3XzyXxQnw7fZF9GOVtx3adpfRPqYGgtbOP34EVkz4wsHvNMrvUrYcKymdOrnkTjlX26fIHUJpKGYkLk9q0jhMNKs4Rn8lj4pJ7YF33/ND4bjpV0ex1EAQz0iZvT37OnxNiuAZ/+4Djf075UuNX2ecWnadOrN1r8NAParZIwUoSUnWhU8TqAWWRqzFURHUZuOMQcA0geg4c9zqtBoUPgtQksbIAEsEXmDuRpwSIFjEkK11f5Eemfmfdg37KyIjQ67TRTmBA+kT9Q5JIm/e7m1ILg/HKckgLUOCnAMsCAwEAAaM2MDQwDwYDVR0TAQH/BAUwAwEB/zARBgNVHQ4ECgQITjtINlziX30wDgYDVR0PAQH/BAQDAgEGMA0GCSqGSIb3DQEBCwUAA4ICAQCdbE8d1c1DysKtrtYlApYIXTlY3N2XHNQ6gKoaVWsKa1TJ/ovrT+FV3bmQLet3aSoEG6pTe/vLZSg8WiF7cn7WuF4XlQS3yA2Uu8/cg/S4owqhQJp6K/Xg6UoSBad9Kog1H8deOfV8Nmb8a89zB4Yf8/AepId+Lr/3I6O7iub+PUT2QBXnksa+cf0yf+49GhyMCILZvctNSQd4Vxr9EgRvBARTrAgNQ9sEOJ6myOz4iTFR7T2pIFP8Cp15e8jEVI1q4IuHu3XlwJNk9f5k3gbwrzoy9P5rP8voQU3u9wh62JZa9U63b+u/Ur1tsKb5Lx0YUedtHvpIiIRurEPxumW0twjrx8TrAcXRrViSL7dsXAoYC0dXo154EE8jBAzgIIur7tJizxgXDEn4i2pu8Yd615YML9ii5BooEJ2j6fQ0nzyPRmx1Egw2Fjlgzzceai4TUOcaCKab86yyu5MZIp+BiPR840nw5MggbRgYH2nFRBA70toVm4VFlbZs3reGmaICm4ST6R395OxYS1iYBm5kXm9tLb4pkIhUxrkgyuiwE+DsWceBjHAYaXnCgUGKtiG9tfBMUw3fChoPb9L1yKdNof3zXDdTloMqEpO4BFrmjco8kt1v0LUQPhNZmQP4nqd4Hqx2384nPmWDXbQ+eePyxRteYGY0hJeDLVpyeYG8VQ==</X509Certificate><X509SubjectName>CN=SafeScrypt CA 2022,houseIdentifier=II Floor, Tidel Park,street=No.4, Rajiv Gandhi Salai,ST=Tamil Nadu,postalCode=600113,OU=Certifying Authority,O=Sify Technologies Limited,C=IN</X509SubjectName><X509Certificate>MIIFyzCCA7OgAwIBAgIQRwYH7tCkAM8CDtcmynPsqTANBgkqhkiG9w0BAQsFADA6MQswCQYDVQQGEwJJTjESMBAGA1UEChMJSW5kaWEgUEtJMRcwFQYDVQQDEw5DQ0EgSW5kaWEgMjAyMjAeFw0yMjAyMTYxMDUzNDhaFw0zMjAyMTYxMDUzNDhaMIHVMQswCQYDVQQGEwJJTjEiMCAGA1UEChMZU2lmeSBUZWNobm9sb2dpZXMgTGltaXRlZDEdMBsGA1UECxMUQ2VydGlmeWluZyBBdXRob3JpdHkxDzANBgNVBBETBjYwMDExMzETMBEGA1UECBMKVGFtaWwgTmFkdTEhMB8GA1UECRMYTm8uNCwgUmFqaXYgR2FuZGhpIFNhbGFpMR0wGwYDVQQzExRJSSBGbG9vciwgVGlkZWwgUGFyazEbMBkGA1UEAxMSU2FmZVNjcnlwdCBDQSAyMDIyMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAqhUJbYvOXXCf/TT2UMLOI7HmLemOSWsQayMzc95KUL6KHGhAECDTWz07d1pSA6DhKUp49+uWOUMq/enOZKRQAtdBocQRDDev51FHSesSGVrPASLmxozR/ES4/AF11PyeHsefVMnkzKvK6cdAraK417DC4F6uCVM+wj/3kGl7COHqpEj1g5/XKkRlq/3PIL/4m7NLq2/TIcicgxUjHOSqtHrNW8vDdPD64c2yzMkozzjIZLu6Cv/Of+DGoN2oSiukWIaQx1VSijasJwykPx435I9sqzjaGja4yI5ox+NbjJnWGmwzncKLBVfkoP5c4whIJ9E+EF0DoZs/kXb+wWiMQwIDAQABo4IBLzCCASswEgYDVR0TAQH/BAgwBgEB/wIBATARBgNVHQ4ECgQIScvUu13lnDMwEgYDVR0gBAswCTAHBgVggmRkAjATBgNVHSMEDDAKgAhOO0g2XOJffTCBgAYIKwYBBQUHAQEEdDByMB4GCCsGAQUFBzABhhJodHRwOi8vb2N2cy5nb3YuaW4wUAYIKwYBBQUHMAKGRGh0dHA6Ly93d3cuY2NhLmdvdi5pbi9jY2Evc2l0ZXMvZGVmYXVsdC9maWxlcy9maWxlcy9DQ0FJbmRpYTIwMjIuY2VyMA4GA1UdDwEB/wQEAwIBBjBGBgNVHR8EPzA9MDugOaA3hjVodHRwOi8vY2NhLmdvdi5pbi9ydy9yZXNvdXJjZXMvQ0NBSW5kaWEyMDIyTGF0ZXN0LmNybDANBgkqhkiG9w0BAQsFAAOCAgEAnDRRXSvn13oweNwVHik4deI8Dq4blgsAn12qq8iOQwdweqQROakPy+Y8rUDG/UX+1D27XUorlc0rStD4/+c1nEXBXKvth1ij/hMzVn/8Lev0uWloGO3lUhfYLMOZgSf8EFSZoG7hotc4E9hj2AehKgfFPvJMBWNn7VsgimwBE4bDVLtn0dFVJWf22LN2CJmwx1MATtnIs0Bot0qLXbfDpq1oefh6vL+RR+XDfYaAsIOmuZD5Pm4cgJ4EKThcCm9s+IucjbzaZgSkyoe6NmKT1o3+l3W9u1jNR2ABS8yzjqLb6MqGCdewlasb1cltwl1LANENnDge7xEGkE4MHC5Oa0ihxEvkWrM+ko8QT9S4dwuQNa4rJx7Ak9sBgag8WHGHgyJTYvv1ViSnv7UA5GdCZyJwJro4HbenfNyU2iJ9b5ZMIX5OXbIDJtS6iCCt/DyaWAQW2riws3xea9+PfvO4M5en3GT6zCK3evIbcIo/uIp8WYNBPK2LKJulYpDWU2q8P0P3q6ykzRwhNTm47PoE3m7KubMHpCcFhNL7p7jTZCoLENt4zaAOCNeq/OVcVr9yTRM231ciiDyt6c1OCfF693zuUkl1Y7nORkQgTQDT0wKY7lgMKmZJ7w9fzgx+R4HHQr1dhE7pf5uLMKVFd//gsNZ4bgFdHu47YlGX3rQXXlo=</X509Certificate><X509SubjectName>CN=SafeScrypt sub-CA for Document Signer 2022,OU=Sub-CA,O=Sify Technologies Limited,C=IN</X509SubjectName><X509Certificate>MIIE/zCCA+egAwIBAgIGaS+ORfU0MA0GCSqGSIb3DQEBCwUAMIHVMQswCQYDVQQGEwJJTjEiMCAGA1UEChMZU2lmeSBUZWNobm9sb2dpZXMgTGltaXRlZDEdMBsGA1UECxMUQ2VydGlmeWluZyBBdXRob3JpdHkxDzANBgNVBBETBjYwMDExMzETMBEGA1UECBMKVGFtaWwgTmFkdTEhMB8GA1UECRMYTm8uNCwgUmFqaXYgR2FuZGhpIFNhbGFpMR0wGwYDVQQzExRJSSBGbG9vciwgVGlkZWwgUGFyazEbMBkGA1UEAxMSU2FmZVNjcnlwdCBDQSAyMDIyMB4XDTIyMDIxODAzNTUyOVoXDTMyMDIxNjA5NTM0OFowdzELMAkGA1UEBhMCSU4xIjAgBgNVBAoTGVNpZnkgVGVjaG5vbG9naWVzIExpbWl0ZWQxDzANBgNVBAsTBlN1Yi1DQTEzMDEGA1UEAxMqU2FmZVNjcnlwdCBzdWItQ0EgZm9yIERvY3VtZW50IFNpZ25lciAyMDIyMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAvEFENGRPNl5cZxGZfsOCVL3JIXp2yQpUkwHK1Lgp1GTihg2nfB0wnjrC1rLN12DQ1IdN/b1twM62WROKwJqKAXWMLAzhx5dcOZpBoY/sFILLlZnd4yYC8p1GPz7QJ30vuBeLSCSx6vVqZFIjuJce9Rrn2IHg4asTbzQ033obSdI+d9ghsULSHHbx2ZOA/S8NGGc4242EOemN/hCHfWr4QqvrLI6e4qPDpDPUs2QxvFEflTmxiMGnaMFCC20qE5Sf50kzNFsP9L7siFUNxOdQsE+j9BpVxBYMs3p3XPwjaEqaqa/aa+mmEOCDiRs10wPT8p3nDEi5GAl0ui2ypTYTlwIDAQABo4IBMDCCASwwEwYDVR0jBAwwCoAIScvUu13lnDMwEQYDVR0OBAoECEzEC7kvPc60MIGHBggrBgEFBQcBAQR7MHkwPgYIKwYBBQUHMAKGMmh0dHBzOi8vd3d3LnNhZmVzY3J5cHRuZXcuY29tL1NhZmVTY3J5cHRDQTIwMjIuY2VyMDcGCCsGAQUFBzABhitodHRwOi8vb2NzcC5zYWZlc2NyeXB0LmNvbS9TYWZlU2NyeXB0Q0EyMDIyMEAGA1UdHwQ5MDcwNaAzoDGGL2h0dHA6Ly9jcmwyLnNhZmVzY3J5cHQuY29tL1NhZmVTY3J5cHRDQTIwMjIuY3JsMBIGA1UdIAQLMAkwBwYFYIJkZAIwEgYDVR0TAQH/BAgwBgEB/wIBADAOBgNVHQ8BAf8EBAMCAQYwDQYJKoZIhvcNAQELBQADggEBAKm3ERUBAd0brn8VmeXUcBZExQWZfHmgRQGbgRctQ6n1Yf+DJoGO9maQPuUEcaen7Deoc2SE+iaX182CF4XVjV5I6iGRjuowDaWn0K4qgd5a92/7vSKt7DL8uqAXYxFzXCTA1DuKYlV6k4+A18nX+/wVMTVgLqiUIuccvoS+sVXXf7440O/Qtr+YehIN6raPaXAdsfvCWczpQOMSM3Bv2jmU2j7aM0cFKRxPa5CtQ7Y2/yEIPqk1+ZwsqOCdc9vT6q2JkjgpgPF7zvEliTvFdWKAExlada3GEcJQ/bpXLPs1Pqm9qGDd33WHXh92NS3OAJ8volK7CiOIK2dmgDmHOts=</X509Certificate></X509Data></KeyInfo></Signature></Certificate>';
        $xml=simplexml_load_string($xmldata);
        $json = json_encode($xml);
        $data = json_decode($json, true);
        print_r($data);
        die();
    }
    
    public function index(){
        if($this->session->userdata('police_login') == 'yes'){
         $page_data['page_name'] = 'dashboard';
         $this->load->view('police/index', $page_data);
      } else {
         redirect(base_url().'police/login','refresh');
      }
    }
    
    function comparePhoto()
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'fmatch.shammtech.in',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => 'image1='.$_POST['file1'].'&image2='.$_POST['file2'],
          CURLOPT_HTTPHEADER => array(
            'Content-Type: application/x-www-form-urlencoded'
          ),
        ));
        $response = json_decode(curl_exec($curl),true);
        $finalResponse = array();
        if($response['message'] != 'Internal Server Error')
        {
            if($response['confidence'] > 80)
            {
                $finalResponse = array(
                    'status' => 'success'    
                );   
            }else{
                $finalResponse = array(
                    'status' => 'success'    
                );   
            }
        }else{
            $finalResponse = array(
                'status' => 'success'    
            );
        }
        echo json_encode($finalResponse);
    }
    
    function markNotificationAsRead()
    {
        $getIfAlready = $this->db->query('update searchnotification set status="Inactive" where complainantUserType="police" and complainantUserId='.$_SESSION['police_id']);
        $getIfAlready = $this->db->query('update Notification set status="Inactive" where personType="wanted" and userId='.$_SESSION['user_id']);
    }
    
    function openSearchNotification($id)
    {
        if($this->session->userdata('user_login') == 'yes'){
            $this->db->query('update searchnotification set status="Inactive" where Id='.$id);
            $page_data['notification'] = $this->db->query('select * from searchnotification where Id='.$id)->result_array();
            $page_data['page_name'] = 'openSearchNotification';
            $this->load->view('police/index', $page_data);
        }else 
        {
            redirect('login','refresh');
        }
    }
    
    function notification_history()
    {
        if($this->session->userdata('user_login') == 'yes')
        {
            $page_data['notification'] = $this->db->query('select * from Notification where personType="wanted" and userId='.$_SESSION['user_id'].' order by Id desc')->result_array();
            $page_data['searchnotification'] = $this->db->query('select * from searchnotification where status !="Active" and complainantUserType="police" and complainantUserId='.$_SESSION['police_id'].' order by Id desc')->result_array();
            $page_data['page_name'] = 'notification_history';
            $this->load->view('police/index', $page_data);
        }else{
            redirect(base_url().'police/login','refresh');
        }
    }

    function view_all_notifications()
    {
        if($this->session->userdata('police_login') == 'yes')
        {
            $page_data['notification'] = $this->db->query('select * from Notification where status="Active" and personType="wanted" and userId='.$_SESSION['user_id'].' order by Id desc')->result_array();
            $page_data['searchnotification'] = $this->db->query('select * from searchnotification where status="Active" and complainantUserType="police" and complainantUserId='.$_SESSION['police_id'].' order by Id desc')->result_array();
            $page_data['page_name'] = 'view_all_notifications';
            $this->load->view('police/index', $page_data);
        }else{
            redirect(base_url().'police/login','refresh');
        }   
    }
    
    function search_person_by_identity()
    {
        if($this->session->userdata('police_login') == 'yes'){
            $page_data['pn'] = 1;
            if(isset($_GET['pn']))
            {
                $page_data['pn'] = $_GET['pn'];    
            }
            $page_data['page_name'] = 'search_person_by_identity';
            $this->load->view('police/index', $page_data);
        }else 
        {
            redirect('police/login','refresh');
        }   
    }
    
    function addFaceSearch()
    {
        $getFinalId = $this->db->query('select max(Id) as Id from searchfacehistoryafterlogin')->result_array();
        if($getFinalId[0]['Id'] != NULL)
        {
            $_SESSION['searchFaceIdAfterLogin'] = $getFinalId[0]['Id'] + 1;
        }else{
            $_SESSION['searchFaceIdAfterLogin'] = 1;
        }
        $insertdata = array(
            'Id' => $_SESSION['searchFaceIdAfterLogin'],
            'userId' => $_SESSION['police_id']
        );
        $insert = $this->db->insert('searchfacehistoryafterlogin',$insertdata);
    }

    function searchPersonFace()
    {
        $data = $_POST["mainPhotoSelectedFacematch"];
        $image_array_1 = explode(";", $data);
        $split1 = explode('data:image/',$image_array_1[0]);
        $image_array_2 = explode(",", $image_array_1[1]);
        $data = base64_decode($image_array_2[1]);
        $imageId = time().''.rand(0,10000);
        $newImagePath = 'upload/searchFacePerson/'.$imageId.'.'.$split1[1];
        file_put_contents($newImagePath, $data);
        $curl = curl_init();
        $postdata = json_encode(array(
            "collection_id" => "shivaguptabcaunknownkhoji1",
            "image_id" => $imageId,
            "image_url" => base_url().''.$newImagePath,
            "threshold" => (float)$this->getSettings('policeThreshold')
        ));
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://dev-facesearch-ygh-4uub5jkuwq-el.a.run.app',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => $postdata,
          CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
          ),
        ));
        $faceresponse = json_decode(curl_exec($curl),true);
        $personName = '';
        $gender = '';
        $aadhar = '';
        $gender = '';
        $isVerified = 'No';
        $isVisible = 0;
        $age = '';
        $isWanted = 0;
        $isCriminal = 0;
        $wantedId = array();
        $criminalId = array();
        $address = '';
        $userphoto = '';
        $personId = 0;
        $isLapata = 0;
        $missingId = 0;
        $isUserFound = 0;
        $isMissing = 0;
        $isAadharCorrect = 0;
        $isGenderCorrect = 1;
        $isDobCorrect = 1;
        $userId = array();
        $missingId = array();
        $unknownId = array();
        $lapataId = array();
        $wantedId = array();
        $criminalId = array();
        $finalcount = 0;
        curl_close($curl);
        if(count($faceresponse) > 0)
        {
            if(count($faceresponse['output']) > 0)
            {
                foreach($faceresponse['output'] as $k=>$v)
                {
                    if($finalcount <= 4)
                    {
                        $split = explode('_',$v);
                        if($split[0] == 'GEN')
                        {
                            $this->db->where('imageId',$v);
                            $user = $this->db->get('user')->result_array();
                            if(count($user) > 0)
                            {
                                foreach($user as $k1=>$v1)
                                {
                                    array_push($userId,$v1['uid']);
                                    $finalcount++;
                                }
                            }       
                        }
                        if($split[0] == 'Missing')
                        {
                            $this->db->where('imageId',$v);
                            $this->db->where('isFinalSubmitted',1);
                            $this->db->where('isFound',0);
                            $missingperson = $this->db->get('missingperson')->result_array();
                            if(count($missingperson) > 0)
                            {
                                foreach($missingperson as $k1=>$v1)
                                {
                                    array_push($missingId,$v1['Id']);
                                    $finalcount++;
                                }
                            }
                        }
                        if($split[0] == 'LAP')
                        {
                            $this->db->where('imageId',$v);
                            $this->db->where('expiryDate >=',date('Y-m-d h:i:s'));
                            $lapata = $this->db->get('unknown_person')->result_array();
                            if(count($lapata) > 0)
                            {
                                foreach($lapata as $k1=>$v1)
                                {
                                    if($v1['isFound'] == 0)
                                    {
                                        array_push($lapataId,$v1['id']);
                                        $finalcount++;
                                    }
                                }
                            }
                        }
                        if($split[0] == 'Wanted')
                        {
                            $this->db->where('imageId',$v);
                            $this->db->where('isFinalSubmitted',1);
                            $this->db->where('status','Active');
                            $wanted = $this->db->get('criminals')->result_array();
                            if(count($wanted) > 0)
                            {
                                foreach($wanted as $k1=>$v1)
                                {
                                    array_push($wantedId,$v1['Id']);
                                    $finalcount++;
                                }
                            }
                        }
                        if($split[0] == 'Criminal')
                        {
                            $this->db->where('imageId',$v);
                            $this->db->where('isFinalSubmitted',1);
                            $this->db->where('status','Active');
                            $criminal = $this->db->get('criminals')->result_array();
                            if(count($criminal) > 0)
                            {
                                foreach($criminal as $k1=>$v1)
                                {
                                    array_push($criminalId,$v1['Id']);
                                    $finalcount++;
                                }
                            }
                        }
                        $this->db->or_where('imageId',$v);
                        $this->db->or_where('imageId1',$v);
                        $this->db->or_where('imageId2',$v);
                        $getUnknownDetail = $this->db->get('unknown_person')->result_array();
                        if(count($getUnknownDetail) > 0)
                        {
                            foreach($getUnknownDetail as $k1=>$v1)
                            {
                                if($v1['isFound'] == 0 && $v1['awsEventName'] != 'All')
                                {
                                    array_push($unknownId,$v1['id']);
                                    $finalcount++;
                                }
                            }
                        }
                    }
                }
            }
        }
        curl_close($curl);
        if($finalcount > 0)
        {
            if(count($lapataId) > 0)
            {
                foreach($lapataId as $k=>$v)
                {
                    if($k == 0)
                    {
                        $getApplicationNumber = $this->db->query('select * from unknown_person where id='.$v)->result_array();
                        $notifyData = array(
                            'isLogin' => 1,
                            'policeId' => $_SESSION['police_id'],
                            'dateCreated' => date('Y-m-d H:i:s'),
                            'mobileNumber' => $_SESSION['loginmob'],
                            'searchedAppNumber' => $getApplicationNumber[0]['Application_no'],
                            'searchType' => 'Lapata',
                            'searchPhoto' => $newImagePath,
                            'complainantUserType' => $getApplicationNumber[0]['uploaded_by'],
                            'complainantUserId' => ($getApplicationNumber[0]['uploaded_by'] == 'police' ? $getApplicationNumber[0]['policeId'] : ($getApplicationNumber[0]['uploaded_by'] == 'ngo' ? $getApplicationNumber[0]['ngoId'] : $getApplicationNumber[0]['userId']))
                        );
                        $insert = $this->db->insert('searchnotification',$notifyData);
                        if($getApplicationNumber[0]['uploaded_by'] == 'user')
                        {
                            $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='user' and userId=".$getApplicationNumber[0]['userId']);
                            $query_res = $query->result_array();
                            
                            if(count($query_res) > 0)
                            {
                                foreach ($query_res as $query_res_data) {
                                    $registrationIds[] =$query_res_data['token'];
                                }
                                
                                $url ="https://fcm.googleapis.com/fcm/send";
                                $fields=array(
                                    "registration_ids"=>$registrationIds,
                                    'data' => array("msg"=>"Khoji"),
                                    'priority' => 'high',
                                    "click_action"=>base_url(),
                                    "notification"=>array(
                                        "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - THANA -".$_SESSION['thanaName'].' has searched. Click here to check your notification.',
                                        "title"=>"Khoji",
                                    )   
                                );
                                $headers=array(
                                    'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                                    'Content-Type:application/json'
                                );
                                $ch=curl_init();
                                curl_setopt($ch,CURLOPT_URL,$url);
                                curl_setopt($ch,CURLOPT_POST,true);
                                curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                                curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                                curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                                curl_exec($ch);
                            }
                        }else if($getApplicationNumber[0]['uploaded_by'] == 'police')
                        {
                            $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='police' and userId=".$getApplicationNumber[0]['policeId']);
                            $query_res = $query->result_array();
                            
                            if(count($query_res) > 0)
                            {
                                foreach ($query_res as $query_res_data) {
                                    $registrationIds[] =$query_res_data['token'];
                                }
                                
                                $url ="https://fcm.googleapis.com/fcm/send";
                                $fields=array(
                                    "registration_ids"=>$registrationIds,
                                    'data' => array("msg"=>"Khoji"),
                                    'priority' => 'high',
                                    "click_action"=>base_url(),
                                    "notification"=>array(
                                        "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - THANA -".$_SESSION['thanaName'].' has searched. Click here to check your notification.',
                                        "title"=>"Khoji",
                                    )   
                                );
                                $headers=array(
                                    'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                                    'Content-Type:application/json'
                                );
                                $ch=curl_init();
                                curl_setopt($ch,CURLOPT_URL,$url);
                                curl_setopt($ch,CURLOPT_POST,true);
                                curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                                curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                                curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                                curl_exec($ch);
                            }
                        }else{
                            $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='ngo' and userId=".$getApplicationNumber[0]['ngoId']);
                            $query_res = $query->result_array();
                            
                            if(count($query_res) > 0)
                            {
                                foreach ($query_res as $query_res_data) {
                                    $registrationIds[] =$query_res_data['token'];
                                }
                                
                                $url ="https://fcm.googleapis.com/fcm/send";
                                $fields=array(
                                    "registration_ids"=>$registrationIds,
                                    'data' => array("msg"=>"Khoji"),
                                    'priority' => 'high',
                                    "click_action"=>base_url(),
                                    "notification"=>array(
                                        "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - THANA -".$_SESSION['thanaName'].' has searched. Click here to check your notification.',
                                        "title"=>"Khoji",
                                    )   
                                );
                                $headers=array(
                                    'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                                    'Content-Type:application/json'
                                );
                                $ch=curl_init();
                                curl_setopt($ch,CURLOPT_URL,$url);
                                curl_setopt($ch,CURLOPT_POST,true);
                                curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                                curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                                curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                                curl_exec($ch);
                            }
                        }
                    }
                }
            }
            if(count($unknownId) > 0)
            {
                foreach($unknownId as $k=>$v)
                {
                    if($k == 0)
                    {
                        $getApplicationNumber = $this->db->query('select * from unknown_person where id='.$v)->result_array();
                        $notifyData = array(
                            'isLogin' => 1,
                            'policeId' => $_SESSION['police_id'],
                            'dateCreated' => date('Y-m-d H:i:s'),
                            'mobileNumber' => $_SESSION['loginmob'],
                            'searchedAppNumber' => $getApplicationNumber[0]['Application_no'],
                            'searchType' => 'Unknown',
                            'searchPhoto' => $newImagePath,
                            'complainantUserType' => $getApplicationNumber[0]['uploaded_by'],
                            'complainantUserId' => ($getApplicationNumber[0]['uploaded_by'] == 'police' ? $getApplicationNumber[0]['policeId'] : ($getApplicationNumber[0]['uploaded_by'] == 'ngo' ? $getApplicationNumber[0]['ngoId'] : $getApplicationNumber[0]['userId']))
                        );
                        $insert = $this->db->insert('searchnotification',$notifyData);
                        if($getApplicationNumber[0]['uploaded_by'] == 'user')
                        {
                            $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='user' and userId=".$getApplicationNumber[0]['userId']);
                            $query_res = $query->result_array();
                            
                            if(count($query_res) > 0)
                            {
                                foreach ($query_res as $query_res_data) {
                                    $registrationIds[] =$query_res_data['token'];
                                }
                                
                                $url ="https://fcm.googleapis.com/fcm/send";
                                $fields=array(
                                    "registration_ids"=>$registrationIds,
                                    'data' => array("msg"=>"Khoji"),
                                    'priority' => 'high',
                                    "click_action"=>base_url(),
                                    "notification"=>array(
                                        "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - THANA -".$_SESSION['thanaName'].' has searched. Click here to check your notification.',
                                        "title"=>"Khoji",
                                    )   
                                );
                                $headers=array(
                                    'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                                    'Content-Type:application/json'
                                );
                                $ch=curl_init();
                                curl_setopt($ch,CURLOPT_URL,$url);
                                curl_setopt($ch,CURLOPT_POST,true);
                                curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                                curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                                curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                                curl_exec($ch);
                            }
                        }else if($getApplicationNumber[0]['uploaded_by'] == 'police')
                        {
                            $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='police' and userId=".$getApplicationNumber[0]['policeId']);
                            $query_res = $query->result_array();
                            
                            if(count($query_res) > 0)
                            {
                                foreach ($query_res as $query_res_data) {
                                    $registrationIds[] =$query_res_data['token'];
                                }
                                
                                $url ="https://fcm.googleapis.com/fcm/send";
                                $fields=array(
                                    "registration_ids"=>$registrationIds,
                                    'data' => array("msg"=>"Khoji"),
                                    'priority' => 'high',
                                    "click_action"=>base_url(),
                                    "notification"=>array(
                                        "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - THANA -".$_SESSION['thanaName'].' has searched. Click here to check your notification.',
                                        "title"=>"Khoji",
                                    )   
                                );
                                $headers=array(
                                    'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                                    'Content-Type:application/json'
                                );
                                $ch=curl_init();
                                curl_setopt($ch,CURLOPT_URL,$url);
                                curl_setopt($ch,CURLOPT_POST,true);
                                curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                                curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                                curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                                curl_exec($ch);
                            }
                        }else{
                            $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='ngo' and userId=".$getApplicationNumber[0]['ngoId']);
                            $query_res = $query->result_array();
                            
                            if(count($query_res) > 0)
                            {
                                foreach ($query_res as $query_res_data) {
                                    $registrationIds[] =$query_res_data['token'];
                                }
                                
                                $url ="https://fcm.googleapis.com/fcm/send";
                                $fields=array(
                                    "registration_ids"=>$registrationIds,
                                    'data' => array("msg"=>"Khoji"),
                                    'priority' => 'high',
                                    "click_action"=>base_url(),
                                    "notification"=>array(
                                        "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - THANA -".$_SESSION['thanaName'].' has searched. Click here to check your notification.',
                                        "title"=>"Khoji",
                                    )   
                                );
                                $headers=array(
                                    'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                                    'Content-Type:application/json'
                                );
                                $ch=curl_init();
                                curl_setopt($ch,CURLOPT_URL,$url);
                                curl_setopt($ch,CURLOPT_POST,true);
                                curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                                curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                                curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                                curl_exec($ch);
                            }
                        }
                    }
                }
            }
            $insertdata = array(
                'matchedLapataIds' => implode(',',$lapataId),
                'matchedWantedIds' => implode(',',$wantedId),
                'matchedCriminalIds' => implode(',',$criminalId),
                'matchedMissingIds' => implode(',',$missingId),
                'matchedUserIds' => implode(',',$userId),
                'matchedUnknownIds' => implode(',',$unknownId),
                'mainPhoto' => $newImagePath
            );
            $this->db->where('Id',$_SESSION['searchFaceIdAfterLogin']);
            $update = $this->db->update('searchfacehistoryafterlogin',$insertdata);
            $response = array(
                'status' => 'success',
                'personName' => $personName,
                'isWanted' => $isWanted,
                'isCriminal' => $isCriminal,
                'isLapata' => $isLapata,
                'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                'gender' => strtolower($gender),
                'age' => $age,
                'address' => $address,
                'isAadharCorrect' => $isAadharCorrect,
                'isDobCorrect' => $isDobCorrect,
                'isGenderCorrect' => $isGenderCorrect,
                'message' => 'Person Found',
                'isMissing' => $isMissing,
                'isRegistered' => $isUserFound,
                'image' => $userphoto,
                'finalCount' => $finalcount
            );
            echo json_encode($response);     
        }else{
            $response = array(
                'status' => 'success',
                'finalCount' => $finalcount
            );
            echo json_encode($response);     
        }
    }
        
    function completeFaceMatchResults()
    {
        if($this->session->userdata('police_login') == 'yes')
        {
            if(isset($_SESSION['searchFaceIdAfterLogin']))
            {
                $page_data['control'] = 'user';
                $page_data['title'] = 'Face Match Results';
                $page_data['page_name'] = 'completeFaceMatchResults';
                $this->load->view('police/index', $page_data); 
            }else{
                redirect('police/search_person_details?pn=7','refresh');
            }
        }else{
            redirect(base_url().'police','refresh');
        }
    }
    
    function openNotification($id)
    {
        if($this->session->userdata('police_login') == 'yes'){
            try{
                $this->db->query('update Notification set status="Inactive" where Id='.$id);
                $page_data['notification'] = $this->db->query('select * from Notification where Id='.$id)->result_array();
                $page_data['page_name'] = 'openNotification';
                $this->load->view('police/index', $page_data);   
            }catch(\Throwable $e)
            {
                echo $e;
                die();
            }
        }else 
        {
            redirect(base_url().'police/login','refresh');
        }
    }
    
    function deleteUnknownGold()
    {
        $this->db->query('delete from unknownPersonGold where Id='.$_POST['oldId']);
    }
    
    function editUnknownDetails()
    {
        if($this->session->userdata('police_login') == 'yes'){
            $page_data['page_name'] = 'editUnknownDetails';
            $page_data['pn'] = 1;
            if(isset($_GET['pn']))
            {
                $page_data['pn'] = $_GET['pn'];    
            }
            $page_data['data'] = $this->db->query('select * from unknown_person where Application_no="'.$_GET['id'].'"')->result_array();
            $page_data['gold'] = $this->db->query('select * from unknownPersonGold where unknownId='.$page_data['data'][0]['id'])->result_array();
            // $page_data['data'] = array();
            $this->load->view('police/index', $page_data);
        } else {
            redirect(base_url().'police/login','refresh');
        }
    }
    
    function manage_unknown_person()
    {
        if($this->session->userdata('police_login') == 'yes'){
            $page_data['page_name'] = 'manage_unknown_person';
            if(!isset($_GET['appNo']))
            {
                $page_data['data'] = $this->db->query('select * from unknown_person where awsEventName="Unknown" and policeId='.$_SESSION['police_id'])->result_array();
            }else{
                $page_data['data'] = $this->db->query('select * from unknown_person where Application_no="'.$_GET['appNo'].'" and awsEventName="Unknown" and policeId='.$_SESSION['police_id'])->result_array();
            }
            $page_data['rows'] = count($page_data['data']);
        	$page_rows = 100;
         
        	$last = ceil($page_data['rows']/$page_rows);
         
        	if($last < 1){
        		$last = 1;
        	}
         
        	$pagenum = 1;
         
        	if(isset($_GET['pn'])){
        		$pagenum = preg_replace('#[^0-9]#', '', $_GET['pn']);
        	}
         
        	if ($pagenum < 1) { 
        		$pagenum = 1; 
        	} 
        	else if ($pagenum > $last) { 
        		$pagenum = $last; 
        	}
         
        	$limit = 'LIMIT ' .($pagenum - 1) * $page_rows .',' .$page_rows;
        	if(!isset($_GET['appNo']))
            {
                $page_data['data']=$this->db->query('select * from unknown_person where awsEventName="Unknown" and policeId='.$_SESSION['police_id'].' order by dateCreated desc '.$limit)->result_array();
            }else{
                $page_data['data']=$this->db->query('select * from unknown_person where Application_no="'.$_GET['appNo'].'" and awsEventName="Unknown" and policeId='.$_SESSION['police_id'].' order by dateCreated desc '.$limit)->result_array();
            }
            $page_data['paginationCtrls'] = '';     
            if($last != 1){
                if ($pagenum > 1) {
                    $previous = $pagenum - 1;
                    $page_data['paginationCtrls'] .= '<a href="'.base_url().'police/manage_unknown_person?pn='.$previous.'" class="btn btn-default mt-0 ms-3">Previous</a> &nbsp; &nbsp; ';
             
                    for($i = $pagenum-4; $i < $pagenum; $i++){
                        if($i > 0){
                            $paginationCtrls .= '<a href="'.base_url().'police/manage_unknown_person?pn='.$i.'" class="btn btn-default mt-0 ms-3">'.$i.'</a> &nbsp; ';
                        }
                    }
                }
             
                $page_data['paginationCtrls'] .= ''.$pagenum.' &nbsp; ';
             
                for($i = $pagenum+1; $i <= $last; $i++){
                    $page_data['paginationCtrls'] .= '<a href="'.base_url().'police/manage_unknown_person?pn='.$i.'" class="btn btn-default mt-0 ms-3">'.$i.'</a> &nbsp; ';
                    if($i >= $pagenum+4){
                        break;
                    }
                }
             
                if ($pagenum != $last) {
                    $next = $pagenum + 1;
                    $page_data['paginationCtrls'] .= ' &nbsp; &nbsp; <a href="'.base_url().'police/manage_unknown_person?pn='.$next.'" class="btn btn-default mt-0 ms-3">Next</a> ';
                }
            }
            $this->load->view('police/index', $page_data);
        } else {
            redirect(base_url().'police/login','refresh');
        } 
    }
    
    function updateContact()
    {
        if(isset($_GET['id']))
        {
            $getPreviousData = $this->db->query('select * from unknown_person where id='.$_GET['id'])->result_array();
            $profileDetail = $this->db->query('select * from police where police_id='.$_SESSION['police_id'])->result_array();
            if($getPreviousData[0]['well1'] == NULL)
            {
                $updateData = array(
                    'well1' => ($profileDetail[0]['alternate_mobile1'] != NULL ? $profileDetail[0]['alternate_mobile1'] : NULL),
                    'isProfileContact1' =>($profileDetail[0]['alternate_mobile1'] != NULL ? 1 : 0)
                );   
                $this->db->where('id',$_GET['id']);
                $this->db->update('unknown_person',$updateData);
            }
            if($getPreviousData[0]['well2'] == NULL)
            {
                $updateData = array(
                    'well2' => ($profileDetail[0]['alternate_mobile2'] != NULL ? $profileDetail[0]['alternate_mobile2'] : NULL),
                    'isProfileContact2' =>($profileDetail[0]['alternate_mobile2'] != NULL ? 1 : 0)
                );   
                $this->db->where('id',$_GET['id']);
                $this->db->update('unknown_person',$updateData);
            }
            if($getPreviousData[0]['well3'] == NULL){
                $updateData = array(
                    'well3' => ($profileDetail[0]['alternate_mobile3'] != NULL ? $profileDetail[0]['alternate_mobile3'] : NULL),
                    'isProfileContact3' =>($profileDetail[0]['alternate_mobile3'] != NULL ? 1 : 0)
                );   
                $this->db->where('id',$_GET['id']);
                $this->db->update('unknown_person',$updateData);
            }
        }else{
            $getPreviousData = $this->db->query('select * from unknown_person where id='.$_SESSION['unknownId'])->result_array();
            $profileDetail = $this->db->query('select * from police where police_id='.$_SESSION['police_id'])->result_array();
            if($getPreviousData[0]['well1'] == NULL)
            {
                $updateData = array(
                    'well1' => ($profileDetail[0]['alternate_mobile1'] != NULL ? $profileDetail[0]['alternate_mobile1'] : NULL),
                    'isProfileContact1' =>($profileDetail[0]['alternate_mobile1'] != NULL ? 1 : 0)
                );   
                $this->db->where('id',$_SESSION['unknownId']);
                $this->db->update('unknown_person',$updateData);
            }
            if($getPreviousData[0]['well2'] == NULL)
            {
                $updateData = array(
                    'well2' => ($profileDetail[0]['alternate_mobile2'] != NULL ? $profileDetail[0]['alternate_mobile2'] : NULL),
                    'isProfileContact2' =>($profileDetail[0]['alternate_mobile2'] != NULL ? 1 : 0)
                );   
                $this->db->where('id',$_SESSION['unknownId']);
                $this->db->update('unknown_person',$updateData);
            }
            if($getPreviousData[0]['well3'] == NULL){
                $updateData = array(
                    'well3' => ($profileDetail[0]['alternate_mobile3'] != NULL ? $profileDetail[0]['alternate_mobile3'] : NULL),
                    'isProfileContact3' =>($profileDetail[0]['alternate_mobile3'] != NULL ? 1 : 0)
                );   
                $this->db->where('id',$_SESSION['unknownId']);
                $this->db->update('unknown_person',$updateData);
            }   
        }
    }
    
    function removeFir($id)
    {
        $this->db->query('delete from crimeFir where Id='.$id);
    }
    
    function getIpcDhara()
    {
        echo json_encode($this->db->query('select * from ipcDhara')->result_array());
    }
    
    function getWantedDetails()
    {
        $personName = '';
        $panNumber = '';
        $voterId = '';
        $dlNumber = '';
        $gender = '';
        $age = '';
        $dob = '';
        $state = '';
        $district = '';
        $city = '';
        $getFromUser = $this->db->query('select * from criminals where type="wanted" and aadharNumber="'.$_POST['aadhar'].'" and isFinalSubmitted=1')->result_array();
        if(count($getFromUser) > 0)
        {
            $personName = $getFromUser[0]['personName'];
            $panNumber = $getFromUser[0]['panNumber'];   
            $voterId = $getFromUser[0]['voterId'];   
            $dlNumber = $getFromUser[0]['dlNumber'];   
            $gender = ucfirst($getFromUser[0]['gender']);
            $dob = $getFromUser[0]['dob'];
            $from=new DateTime(date('Y-m-d'));
            $to   = new DateTime($getFromUser[0]['dob']);
            $age = ($from->diff($to)->y);
            $state = ucfirst($getFromUser[0]['state']);
            $district = ucfirst($getFromUser[0]['district']);
            $city = ucfirst($getFromUser[0]['city']);
            $getFirDetails = $this->db->query('select * from crimeFir where crimeId='.$getFromUser[0]['Id'])->result_array();
            $response = array(
                'status' => 'success',
                'personName' => $personName,
                'voterId' => $voterId,
                'dlNumber' => $dlNumber,
                'panNumber' => $panNumber,
                'gender' => $gender,
                'dob' => $dob,
                'age' => $age,
                'state' => $state,
                'district' => $district,
                'city' => $city,
                'firDetail' => $getFirDetails
            );
            echo json_encode($response);
        }else{
            $response = array(
                'status' => 'error'
            );
            echo json_encode($response);
        }
    }
    
    function getCriminalDetails()
    {
        $personName = '';
        $panNumber = '';
        $voterId = '';
        $dlNumber = '';
        $gender = '';
        $age = '';
        $dob = '';
        $state = '';
        $district = '';
        $city = '';
        $getFromUser = $this->db->query('select * from criminals where type="criminal" and aadharNumber="'.$_POST['aadhar'].'" and isFinalSubmitted=1')->result_array();
        if(count($getFromUser) > 0)
        {
            $personName = $getFromUser[0]['personName'];
            $panNumber = $getFromUser[0]['panNumber'];   
            $voterId = $getFromUser[0]['voterId'];   
            $dlNumber = $getFromUser[0]['dlNumber'];   
            $gender = ucfirst($getFromUser[0]['gender']);
            $dob = $getFromUser[0]['dob'];
            $from=new DateTime(date('Y-m-d'));
            $to   = new DateTime($getFromUser[0]['dob']);
            $age = ($from->diff($to)->y);
            $state = strtoupper($getFromUser[0]['state']);
            $district = strtoupper($getFromUser[0]['district']);
            $city = strtoupper($getFromUser[0]['city']);
            $getFirDetails = $this->db->query('select * from crimeFir where crimeId='.$getFromUser[0]['Id'])->result_array();
            $response = array(
                'status' => 'success',
                'personName' => $personName,
                'voterId' => $voterId,
                'dlNumber' => $dlNumber,
                'panNumber' => $panNumber,
                'gender' => $gender,
                'dob' => $dob,
                'age' => $age,
                'state' => $state,
                'district' => $district,
                'city' => $city,
                'firDetail' => $getFirDetails
            );
            echo json_encode($response);
        }else{
            $response = array(
                'status' => 'error'
            );
            echo json_encode($response);
        }
    }
    
    function upload_person_filter()
    {
        $page_data['pn'] = 1;
        if(isset($_GET['pn']))
        {
            $page_data['pn'] = $_GET['pn'];    
        }
        $page_data['page_name'] = 'upload_person_filter';
        $this->load->view('police/index', $page_data);   
    }
    
    function manage_person_filter()
    {
        $page_data['page_name'] = 'manage_person_filter';
        $this->load->view('police/index', $page_data);     
    }
    
    public function add_data_by_police(){
    	if($this->session->userdata('police_login') == 'yes'){
         $page_data['page_name'] = 'add_data_by_police';
         $this->load->view('police/index', $page_data);
      } else {
         redirect(base_url().'police/login','refresh');
      }
    }
    
     public function search_all_page(){
    	if($this->session->userdata('police_login') == 'yes'){
         $page_data['page_name'] = 'search_all_page';
         $this->load->view('police/index', $page_data);
      } else {
         redirect(base_url().'police/login','refresh');
      }
    }
    
    function uploadFilteredPhoto()
    {
        if(isset($_POST['id']))
        {
            $filename = $_FILES["file"]["name"]; 
            $ext = end((explode(".", $filename)));
            $key = 'personfilter/'.time().''.rand(0,10000).'.'.$ext;
            $this->load->library('SupabaseStorage');
            $res = $this->supabasestorage->uploadFile($key, $_FILES['file']['tmp_name'], $_FILES['file']['type'] ?: 'application/octet-stream');
            if(($res['status'] ?? '') !== 'success'){
                echo json_encode(['status'=>'error','message'=>'Upload failed']);
                die();
            }
            $filename = $this->supabasestorage->getPublicUrl($key);
            if($_POST['isUploaded'] == 0)
            {
                $insertdata = array(
                    'photourl' => $filename,
                    'unknownId' => $_POST['id']
                );
                $this->db->insert('filterpersonphotos',$insertdata);
            }else{
                $updatetdata = array(
                    'photourl' => $filename,
                );
                $this->db->where('Id',$_POST['isUploaded']);
                $this->db->update('filterpersonphotos',$updatetdata);
            }
            $response = array(
                'status' => 'success',
                'message' => 'Photo Uploaded Successfully'
            );
            echo json_encode($response);     
        }else{
            $filename = $_FILES["file"]["name"]; 
            $ext = end((explode(".", $filename)));
            $key = 'personfilter/'.time().''.rand(0,10000).'.'.$ext;
            $this->load->library('SupabaseStorage');
            $res = $this->supabasestorage->uploadFile($key, $_FILES['file']['tmp_name'], $_FILES['file']['type'] ?: 'application/octet-stream');
            if(($res['status'] ?? '') !== 'success'){
                echo json_encode(['status'=>'error','message'=>'Upload failed']);
                die();
            }
            $filename = $this->supabasestorage->getPublicUrl($key);
            if($_POST['isUploaded'] == 0)
            {
                $insertdata = array(
                    'photourl' => $filename,
                    'filterId' => $_SESSION['filterId']
                );
                $this->db->insert('filterpersonphotos',$insertdata);
            }else{
                $updatetdata = array(
                    'photourl' => $filename,
                );
                $this->db->where('Id',$_POST['isUploaded']);
                $this->db->update('filterpersonphotos',$updatetdata);
            }
            $response = array(
                'status' => 'success',
                'message' => 'Photo Uploaded Successfully'
            );
            echo json_encode($response);  
        }
    }
    
    function uploadUnknownPhoto()
    {
        if(isset($_POST['id']))
        {
            $filename = $_FILES["file"]["name"]; 
            $ext = end((explode(".", $filename)));
            $key = 'unknown/'.time().''.rand(0,10000).'.'.$ext;
            $this->load->library('SupabaseStorage');
            $res = $this->supabasestorage->uploadFile($key, $_FILES['file']['tmp_name'], $_FILES['file']['type'] ?: 'application/octet-stream');
            if(($res['status'] ?? '') !== 'success'){
                echo json_encode(['status'=>'error','message'=>'Upload failed']);
                die();
            }
            $filename = $this->supabasestorage->getPublicUrl($key);
            if($_POST['isUploaded'] == 0)
            {
                $insertdata = array(
                    'photourl' => $filename,
                    'unknownId' => $_POST['id']
                );
                $this->db->insert('unknownphotos',$insertdata);
            }else{
                $updatetdata = array(
                    'photourl' => $filename,
                );
                $this->db->where('Id',$_POST['isUploaded']);
                $this->db->update('unknownphotos',$updatetdata);
            }
            $response = array(
                'status' => 'success',
                'message' => 'Photo Uploaded Successfully'
            );
            echo json_encode($response);     
        }else{
            $filename = $_FILES["file"]["name"]; 
            $ext = end((explode(".", $filename)));
            $key = 'unknown/'.time().''.rand(0,10000).'.'.$ext;
            $this->load->library('SupabaseStorage');
            $res = $this->supabasestorage->uploadFile($key, $_FILES['file']['tmp_name'], $_FILES['file']['type'] ?: 'application/octet-stream');
            if(($res['status'] ?? '') !== 'success'){
                echo json_encode(['status'=>'error','message'=>'Upload failed']);
                die();
            }
            $filename = $this->supabasestorage->getPublicUrl($key);
            if($_POST['isUploaded'] == 0)
            {
                $insertdata = array(
                    'photourl' => $filename,
                    'unknownId' => $_SESSION['unknownId']
                );
                $this->db->insert('unknownphotos',$insertdata);
            }else{
                $updatetdata = array(
                    'photourl' => $filename,
                );
                $this->db->where('Id',$_POST['isUploaded']);
                $this->db->update('unknownphotos',$updatetdata);
            }
            $response = array(
                'status' => 'success',
                'message' => 'Photo Uploaded Successfully'
            );
            echo json_encode($response);  
        }
    }
    
    function uploadCriminalPhoto()
    {
        if(isset($_POST['id']))
        {
            $filename = $_FILES["file"]["name"]; 
            $ext = end((explode(".", $filename)));
            $key = 'criminal/'.time().''.rand(0,10000).'.'.$ext;
            $this->load->library('SupabaseStorage');
            $res = $this->supabasestorage->uploadFile($key, $_FILES['file']['tmp_name'], $_FILES['file']['type'] ?: 'application/octet-stream');
            if(($res['status'] ?? '') !== 'success'){
                echo json_encode(['status'=>'error','message'=>'Upload failed']);
                die();
            }
            $filename = $this->supabasestorage->getPublicUrl($key);
            if($_POST['isUploaded'] == 0)
            {
                $insertdata = array(
                    'photourl' => $filename,
                    'crimeId' => $_POST['id']
                );
                $this->db->insert('criminalphotos',$insertdata);
            }else{
                $updatetdata = array(
                    'photourl' => $filename,
                );
                $this->db->where('Id',$_POST['isUploaded']);
                $this->db->update('criminalphotos',$updatetdata);
            }
            $response = array(
                'status' => 'success',
                'message' => 'Photo Uploaded Successfully'
            );
            echo json_encode($response);     
        }else{
            $filename = $_FILES["file"]["name"]; 
            $ext = end((explode(".", $filename)));
            $key = 'criminal/'.time().''.rand(0,10000).'.'.$ext;
            $this->load->library('SupabaseStorage');
            $res = $this->supabasestorage->uploadFile($key, $_FILES['file']['tmp_name'], $_FILES['file']['type'] ?: 'application/octet-stream');
            if(($res['status'] ?? '') !== 'success'){
                echo json_encode(['status'=>'error','message'=>'Upload failed']);
                die();
            }
            $filename = $this->supabasestorage->getPublicUrl($key);
            if($_POST['isUploaded'] == 0)
            {
                $insertdata = array(
                    'photourl' => $filename,
                    'crimeId' => $_SESSION['crimeId']
                );
                $this->db->insert('criminalphotos',$insertdata);
            }else{
                $updatetdata = array(
                    'photourl' => $filename,
                );
                $this->db->where('Id',$_POST['isUploaded']);
                $this->db->update('criminalphotos',$updatetdata);
            }
            $response = array(
                'status' => 'success',
                'message' => 'Photo Uploaded Successfully'
            );
            echo json_encode($response);  
        }
    }
    
    function uploadWantedPhoto()
    {
        if(isset($_POST['id']))
        {
            $filename = $_FILES["file"]["name"]; 
            $ext = end((explode(".", $filename)));
            $key = 'criminal/'.time().''.rand(0,10000).'.'.$ext;
            $this->load->library('SupabaseStorage');
            $res = $this->supabasestorage->uploadFile($key, $_FILES['file']['tmp_name'], $_FILES['file']['type'] ?: 'application/octet-stream');
            if(($res['status'] ?? '') !== 'success'){
                echo json_encode(['status'=>'error','message'=>'Upload failed']);
                die();
            }
            $filename = $this->supabasestorage->getPublicUrl($key);
            if($_POST['isUploaded'] == 0)
            {
                $insertdata = array(
                    'photourl' => $filename,
                    'crimeId' => $_POST['id']
                );
                $this->db->insert('criminalphotos',$insertdata);
            }else{
                $updatetdata = array(
                    'photourl' => $filename,
                );
                $this->db->where('Id',$_POST['isUploaded']);
                $this->db->update('criminalphotos',$updatetdata);
            }
            $response = array(
                'status' => 'success',
                'message' => 'Photo Uploaded Successfully'
            );
            echo json_encode($response);     
        }else{
            $filename = $_FILES["file"]["name"]; 
            $ext = end((explode(".", $filename)));
            $key = 'criminal/'.time().''.rand(0,10000).'.'.$ext;
            $this->load->library('SupabaseStorage');
            $res = $this->supabasestorage->uploadFile($key, $_FILES['file']['tmp_name'], $_FILES['file']['type'] ?: 'application/octet-stream');
            if(($res['status'] ?? '') !== 'success'){
                echo json_encode(['status'=>'error','message'=>'Upload failed']);
                die();
            }
            $filename = $this->supabasestorage->getPublicUrl($key);
            if($_POST['isUploaded'] == 0)
            {
                $insertdata = array(
                    'photourl' => $filename,
                    'crimeId' => $_SESSION['wantedId']
                );
                $this->db->insert('criminalphotos',$insertdata);
            }else{
                $updatetdata = array(
                    'photourl' => $filename,
                );
                $this->db->where('Id',$_POST['isUploaded']);
                $this->db->update('criminalphotos',$updatetdata);
            }
            $response = array(
                'status' => 'success',
                'message' => 'Photo Uploaded Successfully'
            );
            echo json_encode($response);  
        }
    }
    
    function criminal_report()
    {
        if($this->session->userdata('police_login') == 'yes'){
            $page_data['page_name'] = 'criminal_report';
            $this->load->view('police/index', $page_data);
        } else {
            $page_data['control'] = 'police';
            $this->load->view('police/login');
        }
    }
    
    function wanted_report()
    {
        if($this->session->userdata('police_login') == 'yes'){
            $page_data['page_name'] = 'wanted_report';
            $this->load->view('police/index', $page_data);
        } else {
            $page_data['control'] = 'police';
            $this->load->view('police/login');
        }
    }
    
    function thana_report_detail($para1,$para2)
    {
        if($this->session->userdata('police_login') == 'yes'){

            $page_data['page_name'] = $para1;
            $page_data['id'] = $para2;
            if($para1 == 'wanted_detail')
            {
                $page_data['missingAlldetail'] = $this->db->query('select * from criminals where id='.$para2.' and type="wanted"')->result_array();   
            }else{
                $page_data['missingAlldetail'] = $this->db->query('select * from criminals where id='.$para2.' and type="criminal"')->result_array();
            }
            $page_data['missingPhotos'] = $this->db->query('select * from criminalphotos where crimeId='.$para2)->result_array();
            $page_data['firdetails'] = $this->db->query('select * from crimeFir where crimeId='.$para2)->result_array();
            $page_data['docdetails'] = $this->db->query('select * from criminalDocs where crimeId='.$para2)->result_array();
        
            $this->load->view('police/index', $page_data);
        } else {
            $page_data['control'] = 'police';
            $this->load->view('police/login');
        }
    }
    
    function uploadCriminalDoc()
    {
        if($_POST['id'])
        {
            $name = $_FILES["file"]["name"];
            if($name != '')
            {
                if($_POST['isUploaded'] == 0)
                {
                    $ext = end((explode(".", $name)));
                    $filepath = 'upload/criminal/doc/'.time().''.rand(0,10000).'.'.$ext;
                    move_uploaded_file($_FILES['file']['tmp_name'], $filepath);      
                }else{
                    $getPreviousData = $this->db->query('select * from criminalDocs where Id='.$_POST['isUploaded'])->result_array();
                    unlink($getPreviousData[0]['documentFile']);      
                    $ext = end((explode(".", $name)));
                    $filepath = 'upload/criminal/doc/'.time().''.rand(0,10000).'.'.$ext;
                    move_uploaded_file($_FILES['file']['tmp_name'], $filepath);   
                }
            }else{
                $getPreviousData = $this->db->query('select * from criminalDocs where Id='.$_POST['isUploaded'])->result_array();
                if(count($getPreviousData) > 0)
                {
                    $filepath = $getPreviousData[0]['documentFile'];
                }
            }
            if($_POST['isUploaded'] == 0)
            {
                $insertdata = array(
                    'documentName' => $_POST['documentName'],
                    'crimeId' => $_POST['id'],
                    'documentFile'=> $filepath
                );
                $this->db->insert('criminalDocs',$insertdata);
            }else{
                $updatedata = array(
                    'documentName' => $_POST['documentName'],
                    'documentFile' => $filepath,
                );
                $this->db->where('Id',$_POST['isUploaded']);
                $this->db->update('criminalDocs',$updatedata);
            }
            $response = array(
                'status' => 'success',
                'message' => 'Document Uploaded Successfully'
            );
            echo json_encode($response);   
        }else{
            $name = $_FILES["file"]["name"];
            if($name != '')
            {
                if($_POST['isUploaded'] == 0)
                {
                    $ext = end((explode(".", $name)));
                    $filepath = 'upload/criminal/doc/'.time().''.rand(0,10000).'.'.$ext;
                    move_uploaded_file($_FILES['file']['tmp_name'], $filepath);      
                }else{
                    $getPreviousData = $this->db->query('select * from criminalDocs where Id='.$_POST['isUploaded'])->result_array();
                    unlink($getPreviousData[0]['documentFile']);      
                    $ext = end((explode(".", $name)));
                    $filepath = 'upload/criminal/doc/'.time().''.rand(0,10000).'.'.$ext;
                    move_uploaded_file($_FILES['file']['tmp_name'], $filepath);   
                }
            }else{
                $getPreviousData = $this->db->query('select * from criminalDocs where Id='.$_POST['isUploaded'])->result_array();
                if(count($getPreviousData) > 0)
                {
                    $filepath = $getPreviousData[0]['documentFile'];
                }
            }
            if($_POST['isUploaded'] == 0)
            {
                $insertdata = array(
                    'documentName' => $_POST['documentName'],
                    'crimeId' => $_SESSION['crimeId'],
                    'documentFile'=> $filepath
                );
                $this->db->insert('criminalDocs',$insertdata);
            }else{
                
                $updatedata = array(
                    'documentName' => $_POST['documentName'],
                    'documentFile' => $filepath,
                );
                $this->db->where('Id',$_POST['isUploaded']);
                $this->db->update('criminalDocs',$updatedata);
            }
            $response = array(
                'status' => 'success',
                'message' => 'Document Uploaded Successfully'
            );
            echo json_encode($response);   
        }
    }
    
    function uploadWantedDoc()
    {
        if($_POST['id'])
        {
            $name = $_FILES["file"]["name"];
            if($name != '')
            {
                if($_POST['isUploaded'] == 0)
                {
                    $ext = end((explode(".", $name)));
                    $filepath = 'upload/criminal/doc/'.time().''.rand(0,10000).'.'.$ext;
                    move_uploaded_file($_FILES['file']['tmp_name'], $filepath);      
                }else{
                    $getPreviousData = $this->db->query('select * from criminalDocs where Id='.$_POST['isUploaded'])->result_array();
                    unlink($getPreviousData[0]['documentFile']);      
                    $ext = end((explode(".", $name)));
                    $filepath = 'upload/criminal/doc/'.time().''.rand(0,10000).'.'.$ext;
                    move_uploaded_file($_FILES['file']['tmp_name'], $filepath);   
                }
            }else{
                $getPreviousData = $this->db->query('select * from criminalDocs where Id='.$_POST['isUploaded'])->result_array();
                if(count($getPreviousData) > 0)
                {
                    $filepath = $getPreviousData[0]['documentFile'];
                }
            }
            if($_POST['isUploaded'] == 0)
            {
                $insertdata = array(
                    'documentName' => $_POST['documentName'],
                    'crimeId' => $_POST['id'],
                    'documentFile'=> $filepath
                );
                $this->db->insert('criminalDocs',$insertdata);
            }else{
                $updatedata = array(
                    'documentName' => $_POST['documentName'],
                    'documentFile' => $filepath,
                );
                $this->db->where('Id',$_POST['isUploaded']);
                $this->db->update('criminalDocs',$updatedata);
            }
            $response = array(
                'status' => 'success',
                'message' => 'Document Uploaded Successfully'
            );
            echo json_encode($response);   
        }else{
            $name = $_FILES["file"]["name"];
            if($name != '')
            {
                if($_POST['isUploaded'] == 0)
                {
                    $ext = end((explode(".", $name)));
                    $filepath = 'upload/criminal/doc/'.time().''.rand(0,10000).'.'.$ext;
                    move_uploaded_file($_FILES['file']['tmp_name'], $filepath);      
                }else{
                    $getPreviousData = $this->db->query('select * from criminalDocs where Id='.$_POST['isUploaded'])->result_array();
                    unlink($getPreviousData[0]['documentFile']);      
                    $ext = end((explode(".", $name)));
                    $filepath = 'upload/criminal/doc/'.time().''.rand(0,10000).'.'.$ext;
                    move_uploaded_file($_FILES['file']['tmp_name'], $filepath);   
                }
            }else{
                $getPreviousData = $this->db->query('select * from criminalDocs where Id='.$_POST['isUploaded'])->result_array();
                if(count($getPreviousData) > 0)
                {
                    $filepath = $getPreviousData[0]['documentFile'];
                }
            }
            if($_POST['isUploaded'] == 0)
            {
                $insertdata = array(
                    'documentName' => $_POST['documentName'],
                    'crimeId' => $_SESSION['wantedId'],
                    'documentFile'=> $filepath
                );
                $this->db->insert('criminalDocs',$insertdata);
            }else{
                
                $updatedata = array(
                    'documentName' => $_POST['documentName'],
                    'documentFile' => $filepath,
                );
                $this->db->where('Id',$_POST['isUploaded']);
                $this->db->update('criminalDocs',$updatedata);
            }
            $response = array(
                'status' => 'success',
                'message' => 'Document Uploaded Successfully'
            );
            echo json_encode($response);   
        }
    }
    
    function sendDeleteUnknownPersonOtp()
    {
        if(isset($_POST['id']))
        {
            $getDetail = $this->db->query('select * from unknown_person where id='.$_POST['id'])->result_array();
            $string = '0123456789';
            $string_shuffled = str_shuffle($string);
            $otp = substr($string_shuffled, 1, 4);
            if($_SESSION['login_type'] == 'user' || $_SESSION['login_type'] == 'NonKyc')
            {
                $this->sendTextLocalOtp($_SESSION['aadharName'],$_POST['mobile'],$otp);
            }else{
                if($_SESSION['login_type'] == 'police')
                {
                    $this->sendTextLocalOtp($_SESSION['thanaName'],$_POST['mobile'],$otp);
                }else{
                    $this->sendTextLocalOtp($_SESSION['ngoName'],$_POST['mobile'],$otp);
                }
            }
            $update = $this->db->query('update unknown_person set otp='.$otp.' where id='.$_POST['id']);
            if($update)
            {
                $response = array(
                    'status' => 'success'
                );
            }else{
                $response = array(
                    'status' => 'error'
                );
            }
            echo json_encode($response);   
        }else{
            $getDetail = $this->db->query('select * from unknown_person where id='.$_SESSION['unknownId'])->result_array();
            $string = '0123456789';
            $string_shuffled = str_shuffle($string);
            $otp = substr($string_shuffled, 1, 4);
            if($_SESSION['login_type'] == 'user' || $_SESSION['login_type'] == 'NonKyc')
            {
                $this->sendTextLocalOtp($_SESSION['aadharName'],$_POST['mobile'],$otp);
            }else{
                if($_SESSION['login_type'] == 'police')
                {
                    $this->sendTextLocalOtp($_SESSION['thanaName'],$_POST['mobile'],$otp);
                }else{
                    $this->sendTextLocalOtp($_SESSION['ngoName'],$_POST['mobile'],$otp);
                }
            }
            $update = $this->db->query('update unknown_person set otp='.$otp.' where id='.$_SESSION['unknownId']);
            if($update)
            {
                $response = array(
                    'status' => 'success'
                );
            }else{
                $response = array(
                    'status' => 'error'
                );
            }
            echo json_encode($response);      
        }
    }
    
    function deleteFilterPersonMobile()
    {
        $getDetail = $this->db->query('select * from personfilter where id='.$_SESSION['filterId'])->result_array();
        if($_POST['setting'] == 1)
        {
            if($getDetail[0]['otp'] == $_POST['otp'])
            {
                if($_POST['index'] == 2)
                {
                    $update = $this->db->query('update personfilter set well2=NULL,wellrel2=NULL,otherrelationname2=NULL where id='.$_SESSION['filterId']);   
                }else if($_POST['index'] == 3)
                {
                    $update = $this->db->query('update personfilter set well3=NULL,wellrel3=NULL,otherrelationname3=NULL where id='.$_SESSION['filterId']);   
                }
                else{
                    $update = $this->db->query('update personfilter set well1=NULL,wellrel1=NULL,otherrelationname1=NULL where id='.$_SESSION['filterId']);   
                }
                if($update)
                {
                    $response = array(
                        'status' => 'success',
                        'message' => 'Mobile Number Deleted Successfully'
                    );
                }else{
                    $response = array(
                        'status' => 'error',
                        'message' => 'Something Went Wrong'
                    );
                }
                echo json_encode($response);   
            }else{
                $response = array(
                    'status' => 'error',
                    'message' => 'Invalid OTP'
                );
                echo json_encode($response);   
            }   
        }else{
            if($_POST['index'] == 2)
            {
                $update = $this->db->query('update unknown_person set well2=NULL,wellrel2=NULL,otherrelationname2=NULL where id='.$_SESSION['unknownId']);   
            }else if($_POST['index'] == 3)
            {
                $update = $this->db->query('update unknown_person set well3=NULL,wellrel3=NULL,otherrelationname3=NULL where id='.$_SESSION['unknownId']);   
            }
            else{
                $update = $this->db->query('update unknown_person set well1=NULL,wellrel1=NULL,otherrelationname1=NULL where id='.$_SESSION['unknownId']);   
            }
            if($update)
            {
                $response = array(
                    'status' => 'success',
                    'message' => 'Mobile Number Deleted Successfully'
                );
            }else{
                $response = array(
                    'status' => 'error',
                    'message' => 'Something Went Wrong'
                );
            }
            echo json_encode($response);   
        }
    }
    
    function deleteUnknownPersonMobile()
    {
        if(isset($_POST['id']))
        {
            $getDetail = $this->db->query('select * from unknown_person where id='.$_POST['id'])->result_array();
            if($_POST['setting'] == 1)
            {
                if($getDetail[0]['otp'] == $_POST['otp'])
                {
                    if($_POST['index'] == 2)
                    {
                        $update = $this->db->query('update unknown_person set isProfileContact2=0,well2=NULL,wellrel2=NULL,otherrelationname2=NULL where id='.$_POST['id']);   
                    }else if($_POST['index'] == 3)
                    {
                        $update = $this->db->query('update unknown_person set isProfileContact3=0,well3=NULL,wellrel3=NULL,otherrelationname3=NULL where id='.$_POST['id']);   
                    }
                    else{
                        $update = $this->db->query('update unknown_person set isProfileContact1=0,well1=NULL,wellrel1=NULL,otherrelationname1=NULL where id='.$_POST['id']);   
                    }
                    if($update)
                    {
                        $response = array(
                            'status' => 'success',
                            'message' => 'Mobile Number Deleted Successfully'
                        );
                    }else{
                        $response = array(
                            'status' => 'error',
                            'message' => 'Something Went Wrong'
                        );
                    }
                    echo json_encode($response);   
                }else{
                    $response = array(
                        'status' => 'error',
                        'message' => 'Invalid OTP'
                    );
                    echo json_encode($response);   
                }   
            }else{
                if($_POST['index'] == 2)
                {
                    $update = $this->db->query('update unknown_person set isProfileContact2=0,well2=NULL,wellrel2=NULL,otherrelationname2=NULL where id='.$_POST['id']);   
                }else if($_POST['index'] == 3)
                {
                    $update = $this->db->query('update unknown_person set isProfileContact3=0,well3=NULL,wellrel3=NULL,otherrelationname3=NULL where id='.$_POST['id']);   
                }
                else{
                    $update = $this->db->query('update unknown_person set isProfileContact1=0,well1=NULL,wellrel1=NULL,otherrelationname1=NULL where id='.$_POST['id']);   
                }
                if($update)
                {
                    $response = array(
                        'status' => 'success',
                        'message' => 'Mobile Number Deleted Successfully'
                    );
                }else{
                    $response = array(
                        'status' => 'error',
                        'message' => 'Something Went Wrong'
                    );
                }
                echo json_encode($response);   
            }   
        }else{
            $getDetail = $this->db->query('select * from unknown_person where id='.$_SESSION['unknownId'])->result_array();
            if($_POST['setting'] == 1)
            {
                if($getDetail[0]['otp'] == $_POST['otp'])
                {
                    if($_POST['index'] == 2)
                    {
                        $update = $this->db->query('update unknown_person set isProfileContact2=0,well2=NULL,wellrel2=NULL,otherrelationname2=NULL where id='.$_SESSION['unknownId']);   
                    }else if($_POST['index'] == 3)
                    {
                        $update = $this->db->query('update unknown_person set isProfileContact3=0,well3=NULL,wellrel3=NULL,otherrelationname3=NULL where id='.$_SESSION['unknownId']);   
                    }
                    else{
                        $update = $this->db->query('update unknown_person set isProfileContact1=0,well1=NULL,wellrel1=NULL,otherrelationname1=NULL where id='.$_SESSION['unknownId']);   
                    }
                    if($update)
                    {
                        $response = array(
                            'status' => 'success',
                            'message' => 'Mobile Number Deleted Successfully'
                        );
                    }else{
                        $response = array(
                            'status' => 'error',
                            'message' => 'Something Went Wrong'
                        );
                    }
                    echo json_encode($response);   
                }else{
                    $response = array(
                        'status' => 'error',
                        'message' => 'Invalid OTP'
                    );
                    echo json_encode($response);   
                }   
            }else{
                if($_POST['index'] == 2)
                {
                    $update = $this->db->query('update unknown_person set isProfileContact2=0,well2=NULL,wellrel2=NULL,otherrelationname2=NULL where id='.$_SESSION['unknownId']);   
                }else if($_POST['index'] == 3)
                {
                    $update = $this->db->query('update unknown_person set isProfileContact3=0,well3=NULL,wellrel3=NULL,otherrelationname3=NULL where id='.$_SESSION['unknownId']);   
                }
                else{
                    $update = $this->db->query('update unknown_person set isProfileContact1=0,well1=NULL,wellrel1=NULL,otherrelationname1=NULL where id='.$_SESSION['unknownId']);   
                }
                if($update)
                {
                    $response = array(
                        'status' => 'success',
                        'message' => 'Mobile Number Deleted Successfully'
                    );
                }else{
                    $response = array(
                        'status' => 'error',
                        'message' => 'Something Went Wrong'
                    );
                }
                echo json_encode($response);   
            }   
        }
    }
    
    function verifyFilterPersonMobileOtp()
    {
        $getPreviousDetail = $this->db->query('select * from personfilter where id='.$_SESSION['filterId'])->result_array();
        if($_POST['otp'] == $getPreviousDetail[0]['otp'])
        {
            if($_POST['index'] == 2)
            {
                $updatedata = array(
                    'otherrelationname2' => ($_POST['relation'] == 23 ? $_POST['otherrelation'] : NULL),
                    'wellrel2' => $_POST['relation'],
                    'well2' => $_POST['mobile']
                );   
            }else if($_POST['index'] == 3)
            {
                $updatedata = array(
                    'otherrelationname3' => ($_POST['relation'] == 23 ? $_POST['otherrelation'] : NULL),
                    'wellrel3' => $_POST['relation'],
                    'well3' => $_POST['mobile']
                );   
            }
            else{
                $updatedata = array(
                    'otherrelationname1' => ($_POST['relation'] == 23 ? $_POST['otherrelation'] : NULL),
                    'wellrel1' => $_POST['relation'],
                    'well1' => $_POST['mobile']
                );
            }
            $this->db->where('id',$getPreviousDetail[0]['id']);
            $update = $this->db->update('personfilter',$updatedata);
            if($update)
            {
                $response = array(
                    'status' => 'success',
                    'message' => 'New Contact Added Successfully'
                );
                echo json_encode($response);
            }else
            {
                $response = array(
                    'status' => 'error',
                    'message' => 'Something Went Wrong'
                );
                echo json_encode($response);
            }
        }else{
            $response = array(
                'status' => 'error',
                'message' => 'OTP Invalid'
            );
            echo json_encode($response);
        }
    }
    
    function verifyUnknownPersonMobileOtp()
    {
        if(isset($_POST['id']))
        {
            $getPreviousDetail = $this->db->query('select * from unknown_person where id='.$_POST['id'])->result_array();
            if($_POST['otp'] == $getPreviousDetail[0]['otp'])
            {
                if($_POST['index'] == 2)
                {
                    $updatedata = array(
                        'well2' => $_POST['mobile'],
                        'isProfileContact2' => 0,
                    );   
                }else if($_POST['index'] == 3)
                {
                    $updatedata = array(
                        'well3' => $_POST['mobile'],
                        'isProfileContact3' => 0,
                    );   
                }
                else{
                    $updatedata = array(
                        'well1' => $_POST['mobile'],
                        'isProfileContact1' => 0,
                    );
                }
                $this->db->where('id',$getPreviousDetail[0]['id']);
                $update = $this->db->update('unknown_person',$updatedata);
                if($update)
                {
                    $response = array(
                        'status' => 'success',
                        'message' => 'New Contact Added Successfully'
                    );
                    echo json_encode($response);
                }else
                {
                    $response = array(
                        'status' => 'error',
                        'message' => 'Something Went Wrong'
                    );
                    echo json_encode($response);
                }
            }else{
                $response = array(
                    'status' => 'error',
                    'message' => 'OTP Invalid'
                );
                echo json_encode($response);
            }
        }else{
            $getPreviousDetail = $this->db->query('select * from unknown_person where id='.$_SESSION['unknownId'])->result_array();
            if($_POST['otp'] == $getPreviousDetail[0]['otp'])
            {
                if($_POST['index'] == 2)
                {
                    $updatedata = array(
                        'well2' => $_POST['mobile'],
                        'isProfileContact2' => 0,
                    );   
                }else if($_POST['index'] == 3)
                {
                    $updatedata = array(
                        'well3' => $_POST['mobile'],
                        'isProfileContact3' => 0,
                    );   
                }
                else{
                    $updatedata = array(
                        'well1' => $_POST['mobile'],
                        'isProfileContact1' => 0,
                    );
                }
                $this->db->where('id',$getPreviousDetail[0]['id']);
                $update = $this->db->update('unknown_person',$updatedata);
                if($update)
                {
                    $response = array(
                        'status' => 'success',
                        'message' => 'New Contact Added Successfully'
                    );
                    echo json_encode($response);
                }else
                {
                    $response = array(
                        'status' => 'error',
                        'message' => 'Something Went Wrong'
                    );
                    echo json_encode($response);
                }
            }else{
                $response = array(
                    'status' => 'error',
                    'message' => 'OTP Invalid'
                );
                echo json_encode($response);
            }   
        }
    }
    
    function sendFilterPersonMobileOtp()
    {
        $getPreviousDetail = $this->db->query('select * from personfilter where id='.$_SESSION['filterId'])->result_array();
        $getIfAlreadyOtherInNominee1 = $this->db->query('select * from personfilter where well1="'.$_POST['mobile'].'" and id='.$_SESSION['filterId'])->result_array();
        $getIfAlreadyOtherInNominee2 = $this->db->query('select * from personfilter where well2="'.$_POST['mobile'].'" and id='.$_SESSION['filterId'])->result_array();
        $getIfAlreadyOtherInNominee3 = $this->db->query('select * from personfilter where well3="'.$_POST['mobile'].'" and id='.$_SESSION['filterId'])->result_array();
        if(count($getIfAlreadyOtherInNominee1) > 0 || count($getIfAlreadyOtherInNominee2) > 0 || count($getIfAlreadyOtherInNominee3) > 0)
        {
            $response = array(
                'status' => 'username',
                'message' => 'Mobile number already added'
            );
            echo json_encode($response);
        }else{
            // $otp = '1234';
            $string = '0123456789';
            $string_shuffled = str_shuffle($string);
            $otp = substr($string_shuffled, 1, 4);
            $this->sendTextLocalOtp($getPreviousDetail[0]['person_name'],$_POST['mobile'],$otp);
            $updatedata = array(
                'otp' => $otp
            );
            $this->db->where('id',$getPreviousDetail[0]['id']);
            $update = $this->db->update('personfilter',$updatedata);
            if($update)
            {
                $response = array(
                    'status' => 'success',
                    'message' => 'OTP Sent Successfully'
                );
                echo json_encode($response);
            }else
            {
                $response = array(
                    'status' => 'error',
                    'message' => 'Something Went Wrong'
                );
                echo json_encode($response);
            }
        }
    }
    
    function sendUnknownPersonMobileOtp()
    {
        if(isset($_POST['id']))
        {
            $getPreviousDetail = $this->db->query('select * from unknown_person where id='.$_POST['id'])->result_array();
            $getIfAlreadyOtherInNominee1 = $this->db->query('select * from unknown_person where well1="'.$_POST['mobile'].'" and id='.$_POST['id'])->result_array();
            $getIfAlreadyOtherInNominee2 = $this->db->query('select * from unknown_person where well2="'.$_POST['mobile'].'" and id='.$_POST['id'])->result_array();
            $getIfAlreadyOtherInNominee3 = $this->db->query('select * from unknown_person where well3="'.$_POST['mobile'].'" and id='.$_POST['id'])->result_array();
            if(count($getIfAlreadyOtherInNominee1) > 0 || count($getIfAlreadyOtherInNominee2) > 0 || count($getIfAlreadyOtherInNominee3) > 0)
            {
                $response = array(
                    'status' => 'username',
                    'message' => 'Mobile number already added'
                );
                echo json_encode($response);
            }else{
                // $otp = '1234';
                $string = '0123456789';
                $string_shuffled = str_shuffle($string);
                $otp = substr($string_shuffled, 1, 4);
                if($_SESSION['login_type'] == 'user' || $_SESSION['login_type'] == 'NonKyc')
                {
                    $this->sendTextLocalOtp($_SESSION['aadharName'],$_POST['mobile'],$otp);
                }else{
                    if($_SESSION['login_type'] == 'police')
                    {
                        $this->sendTextLocalOtp($_SESSION['thanaName'],$_POST['mobile'],$otp);
                    }else{
                        $this->sendTextLocalOtp($_SESSION['ngoName'],$_POST['mobile'],$otp);
                    }
                }
                $updatedata = array(
                    'otp' => $otp
                );
                $this->db->where('id',$getPreviousDetail[0]['id']);
                $update = $this->db->update('unknown_person',$updatedata);
                if($update)
                {
                    $response = array(
                        'status' => 'success',
                        'message' => 'OTP Sent Successfully To - '.substr_replace($_POST['mobile'],'XXXXXXX',0,7)
                    );
                    echo json_encode($response);
                }else
                {
                    $response = array(
                        'status' => 'error',
                        'message' => 'Something Went Wrong'
                    );
                    echo json_encode($response);
                }
            }
        }else{
            $getPreviousDetail = $this->db->query('select * from unknown_person where id='.$_SESSION['unknownId'])->result_array();
            $getIfAlreadyOtherInNominee1 = $this->db->query('select * from unknown_person where well1="'.$_POST['mobile'].'" and id='.$_SESSION['unknownId'])->result_array();
            $getIfAlreadyOtherInNominee2 = $this->db->query('select * from unknown_person where well2="'.$_POST['mobile'].'" and id='.$_SESSION['unknownId'])->result_array();
            $getIfAlreadyOtherInNominee3 = $this->db->query('select * from unknown_person where well3="'.$_POST['mobile'].'" and id='.$_SESSION['unknownId'])->result_array();
            if(count($getIfAlreadyOtherInNominee1) > 0 || count($getIfAlreadyOtherInNominee2) > 0 || count($getIfAlreadyOtherInNominee3) > 0)
            {
                $response = array(
                    'status' => 'username',
                    'message' => 'Mobile number already added'
                );
                echo json_encode($response);
            }else{
                // $otp = '1234';
                $string = '0123456789';
                $string_shuffled = str_shuffle($string);
                $otp = substr($string_shuffled, 1, 4);
                $this->sendTextLocalOtp((($getPreviousDetail[0]['person_name'] != '') ? $getPreviousDetail[0]['person_name'] : $_POST['mobile']),$_POST['mobile'],$otp);
                $updatedata = array(
                    'otp' => $otp
                );
                $this->db->where('id',$getPreviousDetail[0]['id']);
                $update = $this->db->update('unknown_person',$updatedata);
                if($update)
                {
                    $response = array(
                        'status' => 'success',
                        'message' => 'OTP Sent Successfully To - '.substr_replace($_POST['mobile'],'XXXXXXX',0,7)
                    );
                    echo json_encode($response);
                }else
                {
                    $response = array(
                        'status' => 'error',
                        'message' => 'Something Went Wrong'
                    );
                    echo json_encode($response);
                }
            }   
        }
    }
    
    function deleteUnknownPhoto($id)
    {
        if($_GET['id'])
        {
            $getOldData = $this->db->query('select * from unknownphotos where Id='.$id)->result_array();
            if(count($getOldData) > 0)
            {
                foreach($getOldData as $k=>$v)
                {
                    unlink($v['photourl']);
                }
                $deleteold = $this->db->query('delete from unknownphotos where Id='.$id);
            }   
        }else{
            $getOldData = $this->db->query('select * from unknownphotos where Id='.$id)->result_array();
            if(count($getOldData) > 0)
            {
                foreach($getOldData as $k=>$v)
                {
                    unlink($v['photourl']);
                }
                $deleteold = $this->db->query('delete from unknownphotos where Id='.$id);
            }
        }
    }
    
    function deleteCriminalPhoto($id)
    {
        if($_GET['id'])
        {
            $getOldData = $this->db->query('select * from criminalphotos where Id='.$id)->result_array();
            if(count($getOldData) > 0)
            {
                foreach($getOldData as $k=>$v)
                {
                    unlink($v['photourl']);
                }
                $deleteold = $this->db->query('delete from criminalphotos where Id='.$id);
            }   
        }else{
            $getOldData = $this->db->query('select * from criminalphotos where Id='.$id)->result_array();
            if(count($getOldData) > 0)
            {
                foreach($getOldData as $k=>$v)
                {
                    unlink($v['photourl']);
                }
                $deleteold = $this->db->query('delete from criminalphotos where Id='.$id);
            }
        }
    }
    
    function save_wanted_details($para = '')
    {
        if($para == 'step1')
        {
            if($_POST['firDate1'] != '' && $_POST['firNumber1'] != '')
            {
                $data = $_POST["facematch"];
                $image_array_1 = explode(";", $data);
                $split1 = explode('data:image/',$image_array_1[0]);
                $image_array_2 = explode(",", $image_array_1[1]);
                $data = base64_decode($image_array_2[1]);
                $imageId = 'Wanted_'.time().''.rand(0,10000);
                $mainphoto = 'upload/unknownperson/'.$imageId.'.'.$split1[1];
                file_put_contents($mainphoto, $data);
                $curl = curl_init();
                curl_setopt_array($curl, array(
                  CURLOPT_URL => 'https://api.pixnif.com/api/v1/reindex-image?awsEventName=All&imageId='.$imageId.'&imageUrl='.base_url().''.$mainphoto,
                  CURLOPT_RETURNTRANSFER => true,
                  CURLOPT_ENCODING => '',
                  CURLOPT_MAXREDIRS => 10,
                  CURLOPT_TIMEOUT => 0,
                  CURLOPT_FOLLOWLOCATION => true,
                  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                  CURLOPT_CUSTOMREQUEST => 'POST',
                  CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json',
                    'Authorization: Bearer '.$this->getSettings('facematchtoken')
                  ),
                ));
                
                $response = json_decode(curl_exec($curl),true);
                curl_close($curl);
                if(count($response) > 0)
                {
                    if($response['statusCode'] == 200)
                    {
                        if($response['face_count'] == 1)
                        {
                            $insertData = array(
                                'imageId' => $imageId,
                                'awsEventName' => 'All',
                                'photo' => $mainphoto,
                                'aadharNumber' => $_POST['aadharNumber'],
                                'panNumber' => $_POST['PAN'],
                                'dlNumber' => $_POST['DL_no'],
                                'voterId' => $_POST['voter_id'],
                                'personName' => $_POST['person_name'],
                                'gender'=> $_POST['Gender'],
                                'dob' => $_POST['dob'],
                                'age' => $_POST['age'],
                                'state' => $_POST['state'],
                                'district' => $_POST['district'],
                                'message' => $_POST['message'],
                                'well1' => $_POST['well1'],
                                'well2' => ($_POST['visibility2'] == 1 ? $_POST['well2'] : NULL),
                                'well3' => ($_POST['visibility3'] == 1 ? $_POST['well3'] : NULL),
                                'well4' => ($_POST['visibility4'] == 1 ? $_POST['well4'] : NULL),
                                'city' => $_POST['city'],
                                'type' => 'wanted',
                                'isFinalSubmitted' => 1,
                                'rewardAmount' => $_POST['rewardAmount'],
                                'policeThanaId' => $_SESSION['police_id']
                            );
                            $insert = $this->db->insert('criminals',$insertData);
                            if($insert)
                            {
                                $crimeId = $this->db->insert_id();
                                if($_POST['firCount'] > 0)
                                {
                                    if($_POST['firDate1'] != '' && $_POST['ipcDhara1'] != '' && $_POST['firNumber1'] != '')
                                    {
                                        for($i=1;$i<=$_POST['firCount'];$i++)
                                        {
                                            if($_POST['firDate'.$i] != '' || $_POST['firNumber'.$i] != '' || $_POST['ipcDhara'.$i] != '')
                                            {
                                                $insertFirData = array(
                                                    'firDate' => $_POST['firDate'.$i],
                                                    'firNumber' => $_POST['firNumber'.$i],
                                                    'ipcDhara' => implode(',',$_POST['ipcDhara'.$i]),
                                                    'crimeId' => $crimeId,
                                                    'thanaId' => $_POST['oldPoliceId'.$i]
                                                );      
                                                $this->db->insert('crimeFir',$insertFirData);
                                            }
                                        } 
                                        
                                        $response = array(
                                            'status' => 'success',
                                            'message' => 'Wanted Details Added Successfully'
                                        );
                                        echo json_encode($response);        
                                    }else{
                                        $response = array(
                                            'status' => 'error',
                                            'message' => 'Please Add FIR Details'
                                        );
                                        echo json_encode($response);        
                                    }
                                }
                            }else{
                                $response = array(
                                    'status' => 'error',
                                    'message' => 'Oops, Something Went Wrong'
                                );
                                echo json_encode($response);
                            }
                        }else{
                            if($response['face_count'] > 1)
                            {
                                $response = array(
                                    'status' => 'error',
                                    'message' => 'Multiple faces detected in image'
                                );
                                echo json_encode($response);
                            }else{
                                $response = array(
                                    'status' => 'error',
                                    'message' => 'No face found in the image'
                                );
                                echo json_encode($response);
                            }
                        }
                    }else{
                        $response = array(
                            'status' => 'error',
                            'message' => 'Please upload valid face match image'
                        );
                        echo json_encode($response);
                    }   
                }else{
                    $response = array(
                        'status' => 'error',
                        'message' => 'Please upload valid face match image'
                    );
                    echo json_encode($response);
                }
            }else{
                $response = array(
                    'status' => 'error',
                    'message' => 'Please Add FIR Details'
                );
                echo json_encode($response);        
            }
        }else{
            $updatedata = array(
                'message' => $_POST['message'],
                'rewardAmount' => $_POST['rewardAmount']
            );   
            $this->db->where('Id',$_SESSION['wantedId']);
            $update = $this->db->update('criminals',$updatedata);
            $response = array(
                'status' => 'success',
                'message' => 'Details Saved Successfully'
            );
            echo json_encode($response);
        }
    }
    
    function getGoldType()
    {
        echo json_encode($this->db->query('select * from goldType')->result_array());
    }
    
    function save_criminal_details($para = '')
    {
        if($para == 'step1')
        {
            if($_POST['firDate1'] != '' && $_POST['firNumber1'] != '')
            {
                $data = $_POST["facematch"];
                $image_array_1 = explode(";", $data);
                $split1 = explode('data:image/',$image_array_1[0]);
                $image_array_2 = explode(",", $image_array_1[1]);
                $data = base64_decode($image_array_2[1]);
                $imageId = 'Criminal_'.time().''.rand(0,10000);
                $mainphoto = 'upload/unknownperson/'.$imageId.'.'.$split1[1];
                file_put_contents($mainphoto, $data);
                $curl = curl_init();
                curl_setopt_array($curl, array(
                  CURLOPT_URL => 'https://api.pixnif.com/api/v1/reindex-image?awsEventName=All&imageId='.$imageId.'&imageUrl='.base_url().''.$mainphoto,
                  CURLOPT_RETURNTRANSFER => true,
                  CURLOPT_ENCODING => '',
                  CURLOPT_MAXREDIRS => 10,
                  CURLOPT_TIMEOUT => 0,
                  CURLOPT_FOLLOWLOCATION => true,
                  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                  CURLOPT_CUSTOMREQUEST => 'POST',
                  CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json',
                    'Authorization: Bearer '.$this->getSettings('facematchtoken')
                  ),
                ));
                
                $response = json_decode(curl_exec($curl),true);
                curl_close($curl);
                if(count($response) > 0)
                {
                    if($response['statusCode'] == 200)
                    {
                        if($response['face_count'] == 1)
                        {
                            $insertData = array(
                                'imageId' => $imageId,
                                'awsEventName' => 'All',
                                'photo' => $mainphoto,
                                'aadharNumber' => $_POST['aadharNumber'],
                                'panNumber' => $_POST['PAN'],
                                'dlNumber' => $_POST['DL_no'],
                                'voterId' => $_POST['voter_id'],
                                'personName' => $_POST['person_name'],
                                'gender'=> $_POST['Gender'],
                                'dob' => $_POST['dob'],
                                'age' => $_POST['age'],
                                'state' => $_POST['state'],
                                'isFinalSubmitted' => 1,
                                'message' => $_POST['message'],
                                'well1' => $_POST['well1'],
                                'well2' => ($_POST['visibility2'] == 1 ? $_POST['well2'] : NULL),
                                'well3' => ($_POST['visibility3'] == 1 ? $_POST['well3'] : NULL),
                                'well4' => ($_POST['visibility4'] == 1 ? $_POST['well4'] : NULL),
                                'district' => $_POST['district'],
                                'city' => $_POST['city'],
                                'type' => 'criminal',
                                'policeThanaId' => $_SESSION['police_id']
                            );
                            $insert = $this->db->insert('criminals',$insertData);
                            if($insert)
                            {
                                $crimeId = $this->db->insert_id();
                                if($_POST['firCount'] > 0)
                                {
                                    if($_POST['firDate1'] != '' && $_POST['ipcDhara1'] != '' && $_POST['firNumber1'] != '')
                                    {
                                        for($i=1;$i<=$_POST['firCount'];$i++)
                                        {
                                            if($_POST['firDate'.$i] != '' || $_POST['firNumber'.$i] != '' || $_POST['ipcDhara'.$i] != '')
                                            {
                                                $insertFirData = array(
                                                    'firDate' => $_POST['firDate'.$i],
                                                    'firNumber' => $_POST['firNumber'.$i],
                                                    'ipcDhara' => implode(',',$_POST['ipcDhara'.$i]),
                                                    'crimeId' => $crimeId,
                                                    'thanaId' => $_POST['oldPoliceId'.$i]
                                                );      
                                                $this->db->insert('crimeFir',$insertFirData);
                                            }
                                        } 
                                        
                                        $response = array(
                                            'status' => 'success',
                                            'message' => 'Criminal Details Added Successfully'
                                        );
                                        echo json_encode($response);        
                                    }else{
                                        $response = array(
                                            'status' => 'error',
                                            'message' => 'Please Add FIR Details'
                                        );
                                        echo json_encode($response);        
                                    }
                                }
                            }else{
                                $response = array(
                                    'status' => 'error',
                                    'message' => 'Oops, Something Went Wrong'
                                );
                                echo json_encode($response);
                            }
                        }else{
                            if($response['face_count'] > 1)
                            {
                                $response = array(
                                    'status' => 'error',
                                    'message' => 'Multiple faces detected in image'
                                );
                                echo json_encode($response);
                            }else{
                                $response = array(
                                    'status' => 'error',
                                    'message' => 'No face found in the image'
                                );
                                echo json_encode($response);
                            }
                        }
                    }else{
                        $response = array(
                            'status' => 'error',
                            'message' => 'Please upload valid face match image'
                        );
                        echo json_encode($response);
                    }   
                }else{
                    $response = array(
                        'status' => 'error',
                        'message' => 'Please upload valid face match image'
                    );
                    echo json_encode($response);
                }
            }else{
                $response = array(
                    'status' => 'error',
                    'message' => 'Please Add FIR Details'
                );
                echo json_encode($response);        
            }
        }else{
            $updatedata = array(
                'message' => $_POST['message']
            );   
            $this->db->where('Id',$_SESSION['crimeId']);
            $update = $this->db->update('criminals',$updatedata);
            $response = array(
                'status' => 'success',
                'message' => 'Details Saved Successfully'
            );
            echo json_encode($response);
        }
    }
    
    function finalWantedSumbit()
    {
        if(isset($_GET['id']))
        {
            $updatedata = array(
                'message' => $_POST['message'],
                'rewardAmount' => $_POST['rewardAmount'],
                'isFinalSubmitted' => 1,
            );
            $this->db->where('Id',$_GET['id']);
            $update = $this->db->update('criminals',$updatedata);
        }else{
            $updatedata = array(
                'message' => $_POST['message'],
                'rewardAmount' => $_POST['rewardAmount'],
                'isFinalSubmitted' => 1,
            );
            $this->db->where('Id',$_SESSION['wantedId']);
            $update = $this->db->update('criminals',$updatedata);   
        }
    }
    
    function finalCriminalSumbit()
    {
        if(isset($_GET['id']))
        {
            $updatedata = array(
                'message' => $_POST['message'],
                'isFinalSubmitted' => 1,
            );
            $this->db->where('Id',$_GET['id']);
            $update = $this->db->update('criminals',$updatedata);
        }else{
            $updatedata = array(
                'message' => $_POST['message'],
                'isFinalSubmitted' => 1,
            );
            $this->db->where('Id',$_SESSION['crimeId']);
            $update = $this->db->update('criminals',$updatedata);   
        }
    }
    
    function verifyProfileMobileOtp()
    {
        $getPreviousDetail = $this->db->query('select * from police where police_id="'.$_SESSION['police_id'].'"')->result_array();
        if($_POST['otp'] == $getPreviousDetail[0]['otp'])
        {
            if($_POST['index'] == 2)
            {
                $updatedata = array(
                    'alternate_mobile2' => $_POST['mobile']
                );   
            }else if($_POST['index'] == 3)
            {
                $updatedata = array(
                    'alternate_mobile3' => $_POST['mobile']
                );   
            }
            else{
                $updatedata = array(
                    'alternate_mobile1' => $_POST['mobile']
                );
            }
            $this->db->where('police_id',$getPreviousDetail[0]['police_id']);
            $update = $this->db->update('police',$updatedata);
            if($update)
            {
                $response = array(
                    'status' => 'success',
                    'message' => 'New Mobile Number Added Successfully'
                );
                echo json_encode($response);
            }else
            {
                $response = array(
                    'status' => 'error',
                    'message' => 'Something Went Wrong'
                );
                echo json_encode($response);
            }
        }else{
            $response = array(
                'status' => 'error',
                'message' => 'Otp Invalid'
            );
            echo json_encode($response);
        }
    }
    
    function sendProfileMobileOtp()
    {
        $getPreviousDetail = $this->db->query('select * from police where police_id="'.$_SESSION['police_id'].'"')->result_array();
        $getIfAlreadyOtherInAlternate1 = $this->db->query('select * from police where alternate_mobile1="'.$_POST['mobile'].'" and police_id='.$_SESSION['police_id'])->result_array();
        $getIfAlreadyOtherInAlternate2 = $this->db->query('select * from police where alternate_mobile2="'.$_POST['mobile'].'" and police_id='.$_SESSION['police_id'])->result_array();
        $getIfAlreadyOtherInRegistered = $this->db->query('select * from police where registration_mobile="'.$_POST['mobile'].'" and police_id='.$_SESSION['police_id'])->result_array();
        if(count($getIfAlreadyOtherInAlternate2) > 0 || count($getIfAlreadyOtherInAlternate1) > 0 || count($getIfAlreadyOtherInRegistered) > 0)
        {
            $response = array(
                'status' => 'username',
                'message' => 'Note- This number already exist in your profile.'
            );
            echo json_encode($response);
        }else{
            $string = '0123456789';
            $string_shuffled = str_shuffle($string);
            $otp = substr($string_shuffled, 1, 4);
            $this->sendTextLocalOtp($getPreviousDetail[0]['thanaName'],$_POST['mobile'],$otp);
            $updatedata = array(
                'otp' => $otp
            );
            $this->db->where('police_id',$getPreviousDetail[0]['police_id']);
            $update = $this->db->update('police',$updatedata);
            if($update)
            {
                $response = array(
                    'status' => 'success',
                    'message' => 'OTP Sent Successfully'
                );
                echo json_encode($response);
            }else
            {
                $response = array(
                    'status' => 'error',
                    'message' => 'Something Went Wrong'
                );
                echo json_encode($response);
            }
        }
    }
    
    function step2($para = ''){
        if($para == '')
        {
            $page_data['title'] = 'Step2';
            $page_data['control'] = 'user';
            $this->load->view('user/common/header',$page_data); 
            $this->load->view('user/step2');
            $this->load->view('user/common/footer'); 
        }else{
            $getPreviousDetail = $this->db->query('select * from police where police_id="'.$_SESSION['police_id'].'"')->result_array();
            $updatedata = array(
                'username' => (($_POST['username'] != '') ? $_POST['username'] : NULL),
                'email' => (($_POST['email'] != '') ? $_POST['email'] : NULL),
                'final_mobile_verification' => (($_POST['username'] != '') ? 'success' : NULL),
            );
            $this->db->where('police_id',$getPreviousDetail[0]['police_id']);
            $update = $this->db->update('police',$updatedata);
            if($update)
            {
                $response = array(
                    'status' => 'success',
                    'message' => 'Profile Updated Successfully'
                );
                echo json_encode($response);
            }else
            {
                $response = array(
                    'status' => 'error',
                    'message' => 'Something Went Wrong'
                );
                echo json_encode($response);
            }
        }
    }
    
    function addUnknownProfileContact()
    {
        if(isset($_POST['id']))
        {
            $getPreviousDetail = $this->db->query('select * from unknown_person where id='.$_POST['id'])->result_array();
            $getIfAlreadyOtherInNominee1 = $this->db->query('select * from unknown_person where well1="'.$_POST['mobile'].'" and id='.$_POST['id'])->result_array();
            $getIfAlreadyOtherInNominee2 = $this->db->query('select * from unknown_person where well2="'.$_POST['mobile'].'" and id='.$_POST['id'])->result_array();
            $getIfAlreadyOtherInNominee3 = $this->db->query('select * from unknown_person where well3="'.$_POST['mobile'].'" and id='.$_POST['id'])->result_array();
            if(count($getIfAlreadyOtherInNominee1) > 0 || count($getIfAlreadyOtherInNominee2) > 0 || count($getIfAlreadyOtherInNominee3) > 0)
            {
                $response = array(
                    'status' => 'username',
                    'message' => 'Mobile number already added'
                );
                echo json_encode($response);
            }else{
                if($_POST['index'] == 2)
                {
                    $updatedata = array(
                        'well2' => $_POST['mobile'],
                        'isProfileContact2' => 1,
                    );   
                }else if($_POST['index'] == 3)
                {
                    $updatedata = array(
                        'well3' => $_POST['mobile'],
                        'isProfileContact3' => 1,
                    );   
                }
                else{
                    $updatedata = array(
                        'well1' => $_POST['mobile'],
                        'isProfileContact1' => 1,
                    );
                }
                $this->db->where('id',$getPreviousDetail[0]['id']);
                $update = $this->db->update('unknown_person',$updatedata);
                if($update)
                {
                    $response = array(
                        'status' => 'success',
                        'message' => 'New Contact Added Successfully'
                    );
                    echo json_encode($response);
                }else
                {
                    $response = array(
                        'status' => 'error',
                        'message' => 'Something Went Wrong'
                    );
                    echo json_encode($response);
                }
            }   
        }else{
            $getPreviousDetail = $this->db->query('select * from unknown_person where id='.$_SESSION['unknownId'])->result_array();
            $getIfAlreadyOtherInNominee1 = $this->db->query('select * from unknown_person where well1="'.$_POST['mobile'].'" and id='.$_SESSION['unknownId'])->result_array();
            $getIfAlreadyOtherInNominee2 = $this->db->query('select * from unknown_person where well2="'.$_POST['mobile'].'" and id='.$_SESSION['unknownId'])->result_array();
            $getIfAlreadyOtherInNominee3 = $this->db->query('select * from unknown_person where well3="'.$_POST['mobile'].'" and id='.$_SESSION['unknownId'])->result_array();
            if(count($getIfAlreadyOtherInNominee1) > 0 || count($getIfAlreadyOtherInNominee2) > 0 || count($getIfAlreadyOtherInNominee3) > 0)
            {
                $response = array(
                    'status' => 'username',
                    'message' => 'Mobile number already added'
                );
                echo json_encode($response);
            }else{
                if($_POST['index'] == 2)
                {
                    $updatedata = array(
                        'well2' => $_POST['mobile'],
                        'isProfileContact2' => 1,
                    );   
                }else if($_POST['index'] == 3)
                {
                    $updatedata = array(
                        'well3' => $_POST['mobile'],
                        'isProfileContact3' => 1,
                    );   
                }
                else{
                    $updatedata = array(
                        'well1' => $_POST['mobile'],
                        'isProfileContact1' => 1,
                    );
                }
                $this->db->where('id',$getPreviousDetail[0]['id']);
                $update = $this->db->update('unknown_person',$updatedata);
                if($update)
                {
                    $response = array(
                        'status' => 'success',
                        'message' => 'New Contact Added Successfully'
                    );
                    echo json_encode($response);
                }else
                {
                    $response = array(
                        'status' => 'error',
                        'message' => 'Something Went Wrong'
                    );
                    echo json_encode($response);
                }
            }
        }
    }
    
    function deleteAlternateMobile()
    {
        $getDetail = $this->db->query('select * from police where police_id='.$_SESSION['police_id'])->result_array();
        if($getDetail[0]['otp'] == $_POST['otp'])
        {
            if($_POST['index'] == 2)
            {
                $update = $this->db->query('update police set alternate_mobile2=NULL where police_id='.$_SESSION['police_id']);   
            }else if($_POST['index'] == 3)
            {
                $update = $this->db->query('update police set alternate_mobile3=NULL where police_id='.$_SESSION['police_id']);   
            }
            else{
                $update = $this->db->query('update police set alternate_mobile1=NULL where police_id='.$_SESSION['police_id']);   
            }
            if($update)
            {
                $response = array(
                    'status' => 'success',
                    'message' => 'Alternate Mobile Number Deleted Successfully'
                );
            }else{
                $response = array(
                    'status' => 'error',
                    'message' => 'Something Went Wrong'
                );
            }
            echo json_encode($response);   
        }else{
            $response = array(
                'status' => 'error',
                'message' => 'Invalid Otp'
            );
            echo json_encode($response);   
        }
    }
    
    function sendDeleteProfileOtp()
    {
        $string = '0123456789';
        $string_shuffled = str_shuffle($string);
        $otp = substr($string_shuffled, 1, 4);
        $this->sendTextLocalOtp($_SESSION['username'],$_POST['mobile'],$otp);
        $update = $this->db->query('update police set otp='.$otp.' where police_id='.$_SESSION['police_id']);
        if($update)
        {
            $response = array(
                'status' => 'success'
            );
        }else{
            $response = array(
                'status' => 'error'
            );
        }
        echo json_encode($response);   
    }
    
    function profile($para = '')
    {
        if($para == '')
        {
            if($this->session->userdata('police_login') == 'yes'){
                $page_data['title'] = 'Profile';
                $page_data['page_name'] = 'profile';
                $this->load->view('police/index', $page_data);
              } else {
                 redirect('police/login','refresh');
              }
        }else{
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url(), 'refresh');
    }
    
    function resendRegisterOtp()
    {
        $getPreviousDetail = $this->db->query('select * from police where police_id='.$_SESSION['policeNewId'])->result_array();
        $string = '0123456789';
        $string_shuffled = str_shuffle($string);
        $otp = substr($string_shuffled, 1, 4);
        $this->sendTextLocalOtp($getPreviousDetail[0]['thanaName'],$getPreviousDetail[0]['registration_mobile'],$otp);
        $update = $this->db->query('update police set otp='.$otp.' where police_id='.$getPreviousDetail[0]['police_id']);
        $finalResponse = array(
            'status' => 'success',
            'message' => 'OTP sent successfully'
        );
        echo json_encode($finalResponse);    
    }
    
    function register($para = '')
    {
        if($para == '')
        {
            $page_data['control'] = 'police';
            $page_data['title'] = 'Register';
            $this->load->view('police/common/header', $page_data);
            $this->load->view('police/register');
            $this->load->view('police/common/footer', $page_data);   
        }else{
            unset($_POST['_token']);
            $thana = $this->input->post('thanaName');
            $credential = array('thanaName' => $thana,'final_mobile_verification'=>'success');
            $query = $this->db->get_where('police', $credential);
            if ($query->num_rows() > 0) {
                $row = $query->row();
                if($row->final_mobile_verification == 'success')
                {
                    $response = array(
                        'status' => 'error',
                        'message' => 'Already Verified'
                    );
                    echo json_encode($response);
                }else
                {
                    $string = '0123456789';
                    $string_shuffled = str_shuffle($string);
                    $otp = substr($string_shuffled, 1, 4);
                    $this->sendTextLocalOtp($row->thanaName,$row->registration_mobile,$otp);
                    $update = $this->db->query('update police set otp='.$otp.' where police_id='.$row->police_id);
                    $_SESSION['policeNewId'] = $row->police_id;
                    $finalResponse = array(
                        'status' => 'success',
                        'message' => 'OTP sent successfully'
                    );
                    echo json_encode($finalResponse);          
                }
            } else {
                $string = '0123456789';
                $string_shuffled = str_shuffle($string);
                $otp = substr($string_shuffled, 1, 4);
                $this->sendTextLocalOtp($thana,$_POST['registration_mobile'],$otp);
                $_POST['otp'] = $otp;
                $maxId = 1;
                $getMaxId= $this->db->query('select max(police_id) as Id from police')->result_array();
                if($getMaxId[0]['Id'] != NULL)
                {
                    $maxId= $getMaxId[0]['Id'] + 1;
                }
                $explode = explode(' ',$thana);
                $_POST['username'] = strtolower($explode[0].''.$maxId);
                $insert = $this->db->insert('police',$_POST);   
                $_SESSION['policeNewId'] = $this->db->insert_id();
                $finalresponse = array(
                    'status' => 'success',
                    'message' => 'OTP sent successfully'
                );
                echo json_encode($finalresponse);
            }
        }
    }
    
    function sendTextLocalOtp($username,$mob,$otp)
    {
        $message = 'Dear '.$username.', To verify your mobile number your OTP is '.$otp.'.%nKhoji.in';
        $mob = '91'.$mob;
        try {
            $apiKey = urlencode("NGQ2YzQ3NDM0MjcxNjU2YjcwNmIzOTYzMzI0ZTZkNjg=");
            $sender = urlencode('KHOJI');
            $message = rawurlencode($message);
            $data = array('apikey' => $apiKey, 'numbers' => $mob, 'sender' => $sender, 'message' => $message);
            $ch = curl_init('https://api.textlocal.in/send/');
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            curl_close($ch);
        } catch (\Throwable $th) {
            throw $th;

        }
    }
    
    function getMobileDetails()
    {
        if($_POST['type'] == 'mobile')
        {
            $getIfAlready = $this->db->query('SELECT * FROM police WHERE registration_mobile LIKE "%'.$_POST['value'].'%" or alternate_mobile1 LIKE "%'.$_POST['value'].'%" or alternate_mobile2 LIKE "%'.$_POST['value'].'%"')->result_array();
        }else{
            $getIfAlready = $this->db->query('select * from police where username="'.$_POST['value'].'"')->result_array();
        }
        if(count($getIfAlready) > 0)
        {
            if($getIfAlready[0]['final_mobile_verification'] == 'success')
            {
                if($_POST['type'] == 'mobile')
                {
                    $string = '0123456789';
                    $string_shuffled = str_shuffle($string);
                    $otp = substr($string_shuffled, 1, 4);
                    $this->sendTextLocalOtp($getIfAlready[0]['thanaName'],$_POST['value'],$otp);
                    // $otp = '1234';
                    $update = $this->db->query('update police set otp='.$otp.' where police_id='.$getIfAlready[0]['police_id']);
                    if($update)
                    {
                        $response = array(
                            'status' => 'success'
                        );
                    }else{
                        $response = array(
                            'status' => 'error'
                        );
                    }
                    echo json_encode($response);
                }else{
                    if($getIfAlready[0]['alternate_mobile1'] != NULL && $getIfAlready[0]['alternate_mobile2'] == NULL)
                    {
                        $response = array(
                            'status' => 'success',
                            'isAlternate' => true,
                            'isAlternate1' => true,
                            'isAlternate2' => false,
                            'data' => array(
                                'mobile1' => $getIfAlready[0]['registration_mobile'],
                                'mobile2' => $getIfAlready[0]['alternate_mobile1'],
                                'vismobile1' => substr_replace($getIfAlready[0]['registration_mobile'],'xxxxxx',0,7),
                                'vismobile2' => substr_replace($getIfAlready[0]['alternate_mobile1'],'xxxxxx',0,7),
                            )
                        );
                        echo json_encode($response);
                    }else if($getIfAlready[0]['alternate_mobile2'] != NULL && $getIfAlready[0]['alternate_mobile1'] == NULL)
                    {
                        $response = array(
                            'status' => 'success',
                            'isAlternate' => true,
                            'isAlternate1' => false,
                            'isAlternate2' => true,
                            'data' => array(
                                'mobile1' => $getIfAlready[0]['registration_mobile'],
                                'mobile2' => $getIfAlready[0]['alternate_mobile2'],
                                'vismobile1' => substr_replace($getIfAlready[0]['registration_mobile'],'xxxxxx',0,7),
                                'vismobile2' => substr_replace($getIfAlready[0]['alternate_mobile2'],'xxxxxx',0,7)
                            )
                        );
                        echo json_encode($response);
                    }else if($getIfAlready[0]['alternate_mobile2'] != NULL && $getIfAlready[0]['alternate_mobile1'] != NULL)
                    {
                        $response = array(
                            'status' => 'success',
                            'isAlternate' => true,
                            'isAlternate1' => true,
                            'isAlternate2' => true,
                            'data' => array(
                                'mobile1' => $getIfAlready[0]['registration_mobile'],
                                'mobile2' => $getIfAlready[0]['alternate_mobile1'],
                                'mobile3' => $getIfAlready[0]['alternate_mobile2'],
                                'vismobile1' => substr_replace($getIfAlready[0]['registration_mobile'],'xxxxxx',0,7),
                                'vismobile2' => substr_replace($getIfAlready[0]['alternate_mobile1'],'xxxxxx',0,7),
                                'vismobile3' => substr_replace($getIfAlready[0]['alternate_mobile2'],'xxxxxx',0,7)
                            )
                        );
                        echo json_encode($response);
                    }
                    else{
                        $response = array(
                            'status' => 'success',
                            'isAlternate' => false,
                            'data' => array(
                                'mobile1' => $getIfAlready[0]['registration_mobile'],
                                'vismobile1' => substr_replace($getIfAlready[0]['registration_mobile'],'xxxxxx',0,7),
                            )
                        );
                        echo json_encode($response);
                    }   
                }   
            }else{
                $response = array(
                    'status' => 'error',
                    'message' => 'Final Verification Pending'
                );
                echo json_encode($response);    
            }
        }else{
            $response = array(
                'status' => 'error',
                'message' => 'Invalid Credentials'
            );
            echo json_encode($response);
        }
    }
    
    function verifyPoliceOtp()
    {
        $getPreviousDetail = $this->db->query('select * from police where police_id="'.$_SESSION['policeNewId'].'"')->result_array();
        if($_POST['otp'] == $getPreviousDetail[0]['otp'])
        {
            $updatedata = array(
                'final_mobile_verification' => 'success',
            );
            $this->db->where('police_id',$getPreviousDetail[0]['police_id']);
            $update = $this->db->update('police',$updatedata);
            if($update)
            {
                $this->session->set_userdata('loginmob',$getPreviousDetail[0]['registration_mobile']);
                $this->session->set_userdata('police_login', 'yes');
                $this->session->set_userdata('police_id', $getPreviousDetail[0]['police_id']);
                $this->session->set_userdata('username', $getPreviousDetail[0]['username']);
                $this->session->set_userdata('thanaName', $getPreviousDetail[0]['thanaName']);
                $this->session->set_userdata('login_type', 'police');
                $response = array(
                    'status' => 'success',
                    'username' => $getPreviousDetail[0]['username']
                );
                echo json_encode($response);
            }else
            {
                $response = array(
                    'status' => 'error',
                    'message' => 'Something Went Wrong'
                );
                echo json_encode($response);
            }
        }else{
            $response = array(
                'status' => 'error',
                'message' => 'OTP Invalid'
            );
            echo json_encode($response);
        }
    }
    
    public function getdistrict()
    {
        if(isset($_GET['id']))
        {
            $snm=$_GET['id'];
            $district=$this->db->query("select * from district where st_name='$snm'")->result_array();
            $str='<option value="">Select District</option>';
            if(count($district)<=0)
            {
                $str='<option value="nod">No District found</option>';
            }
            foreach($district as $d)
            {
                $str.='<option value="'.$d['d_name'].'">'. $d['d_name'].'</option>';
            }
        }
        if(isset($_GET['cid']))
        {
            $snm=$_GET['cid'];
            $sid=$_GET['sid'];
            $state=$this->db->query("select * from states where name='$sid'")->result_array();
            $getThana=$this->db->query("select * from police_thana where state='$sid' and district='$snm'")->result_array();
            $str='<option value="">Select Thana</option>';
            if(count($getThana)<=0)
            {
                $str='<option value="nod">No Thana found</option>';
            }
            foreach($getThana as $d)
            {
                $str.='<option value="'.$d['thana'].'">'. $d['thana'].'</option>';
            }
        }
        echo $str;
    }
    
    function upload_wanted_detail()
    {
        if($this->session->userdata('police_login') == 'yes'){
            $page_data['pn'] = 1;
            if(isset($_GET['pn']))
            {
                $page_data['pn'] = $_GET['pn'];    
            }
            $page_data['page_name'] = 'upload_wanted_detail';
            $this->load->view('police/index', $page_data);
        } else {
            redirect(base_url() . 'police', 'refresh');
        }
    }
    
    function upload_criminal_detail()
    {
        if($this->session->userdata('police_login') == 'yes'){
            $page_data['pn'] = 1;
            if(isset($_GET['pn']))
            {
                $page_data['pn'] = $_GET['pn'];    
            }
            $page_data['page_name'] = 'upload_criminal_detail';
            $this->load->view('police/index', $page_data);
        } else {
            redirect(base_url() . 'police', 'refresh');
        }   
    }
    
    function deleteCriminalDoc()
    {
        unlink($_POST['url']);
        $this->db->query('delete from criminalDocs where Id='.$_POST['index']);
    }
    
    function sendLoginOtp()
    {
        if($_POST['type'] == 'mobile')
        {
            $getIfAlready = $this->db->query('SELECT * FROM police WHERE registration_mobile LIKE "%'.$_POST['typeval'].'%" or alternate_mobile1 LIKE "%'.$_POST['typeval'].'%" or alternate_mobile2 LIKE "%'.$_POST['typeval'].'%"')->result_array();
        }else{
            $getIfAlready = $this->db->query('select * from police where username="'.$_POST['typeval'].'"')->result_array();   
        }
        if(count($getIfAlready) > 0)
        {
            $string = '0123456789';
            $string_shuffled = str_shuffle($string);
            $otp = substr($string_shuffled, 1, 4);
            $this->sendTextLocalOtp($getIfAlready[0]['thanaName'],$_POST['mobile'],$otp);
            // $otp = '1234';
            $update = $this->db->query('update police set otp='.$otp.' where police_id='.$getIfAlready[0]['police_id']);
            if($update)
            {
                $response = array(
                    'status' => 'success'
                );
            }else{
                $response = array(
                    'status' => 'error'
                );
            }
            echo json_encode($response);
        }
    }

    public function login($para1 = ''){
        if($para1 == 'do_login'){
            if($_POST['type'] == 'mobile')
            {
                $getDetail = $this->db->query('SELECT * FROM police WHERE registration_mobile LIKE "%'.$_POST['typeval'].'%" or alternate_mobile1 LIKE "%'.$_POST['typeval'].'%" or alternate_mobile2 LIKE "%'.$_POST['typeval'].'%"')->result_array();
            }else{
                $getDetail = $this->db->query('select * from police where username="'.$_POST['typeval'].'"')->result_array();
            }
            if($getDetail[0]['otp'] == $_POST['otp'])
            {
                if(isset($_SESSION['fcmtokenId']))
                $update = $this->db->query('update notification_tokens_tbl set userType="police", userId='.$getDetail[0]['police_id'].' where Id='.$_SESSION['fcmtokenId']);
                $this->session->set_userdata('loginmob',$_POST['typeval']);
                $this->session->set_userdata('police_login', 'yes');
                $this->session->set_userdata('user_login','yes');
                $this->session->set_userdata('user_id',$getDetail[0]['police_id']);
                $this->session->set_userdata('police_id', $getDetail[0]['police_id']);
                $this->session->set_userdata('username', $getDetail[0]['username']);
                $this->session->set_userdata('thanaName', $getDetail[0]['thanaName']);
                $this->session->set_userdata('login_type', 'police');
                $response = array(
                    'status' => 'success',
                    'message' => 'Login Successful',
                    'finalverification' => ($getDetail[0]['final_mobile_verification'] == 'success' ? 'success' : 'failed')
                );
                echo json_encode($response);
            }else{
                $response = array(
                    'status' => 'error',
                    'message' => 'Invalid Otp'
                );
                echo json_encode($response);
            }
        } else 
        {
            $page_data['control'] = 'police';
            $page_data['title'] = 'Login';
            $this->load->view('police/common/header', $page_data);
            $this->load->view('police/login');
            $this->load->view('police/common/footer', $page_data);   
        }
    }
    
    public function upload_detail()
    {
        $page_data['pn'] = 1;
        if(isset($_GET['pn']))
        {
            $page_data['pn'] = $_GET['pn'];    
        }
        $page_data['page_name'] = 'upload_detail';
        $this->load->view('police/index', $page_data);
    }
    
    function compressImage($source, $destination, $quality) { 
        // Get image info 
        $imgInfo = getimagesize($source); 
        $mime = $imgInfo['mime']; 
         
        // Create a new image from file 
        switch($mime){ 
            case 'image/jpeg': 
                $image = imagecreatefromjpeg($source); 
                break; 
            case 'image/png': 
                $image = imagecreatefrompng($source); 
                break; 
            case 'image/gif': 
                $image = imagecreatefromgif($source); 
                break; 
            case 'image/webp':
                $image = imagecreatefromwebp($source);
                break;
            default: 
                $image = imagecreatefromjpeg($source); 
        } 
         
        // Save image 
        imagejpeg($image, $destination, $quality); 
         
        // Return compressed image 
        return $destination; 
    }
    
    function searchByImageOur()
    {
        $name = $_FILES["file"]["name"];
        $ext = end((explode(".", $name)));
        $imageId = time().''.rand(0,10000);
        $fileName = $imageId.'.'.$ext; 
        $imageUploadPath = 'upload/unknownfacematch/' . $fileName; 
        $imageTemp = $_FILES["file"]["tmp_name"]; 
        $compressedImage = $this->compressImage($imageTemp, $imageUploadPath, 75); 
        if($compressedImage != '')
        {
            if(count($_POST['Id']) > 0)
            {
                $finalIds = array();
                $implode = implode(',',$_POST['Id']);
                $getUnknownPhotos = $this->db->query('select * from unknown_person where id in('.$implode.')')->result_array();
                for($i=0;$i<count($getUnknownPhotos);$i++)
                {
                    $curl = curl_init();
                    curl_setopt_array($curl, array(
                      CURLOPT_URL => 'fmatch.shammtech.in',
                      CURLOPT_RETURNTRANSFER => true,
                      CURLOPT_ENCODING => '',
                      CURLOPT_MAXREDIRS => 10,
                      CURLOPT_TIMEOUT => 0,
                      CURLOPT_FOLLOWLOCATION => true,
                      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                      CURLOPT_CUSTOMREQUEST => 'POST',
                      CURLOPT_POSTFIELDS => 'image1='.base_url().''.$compressedImage.'&image2='.base_url().''.$getUnknownPhotos[$i]['Photo'],
                      CURLOPT_HTTPHEADER => array(
                        'Content-Type: application/x-www-form-urlencoded'
                      ),
                    ));
                    
                    $response = json_decode(curl_exec($curl),true);
                    curl_close($curl);   
                    if($response['message'] != 'Internal Server Error')
                    {
                        if($response['confidence'] > 80)
                        {
                            array_push($finalIds,$getUnknownPhotos[$i]['id']);
                        }
                    }
    
                }
                if(count($finalIds) > 0)
                {
                    $finalresponse = array(
                        'status' => 'success',
                        'finalId' => $finalIds
                    );
                    echo json_encode($finalresponse);
                }else{
                    $finalresponse = array(
                        'status' => 'error'
                    );
                    echo json_encode($finalresponse);    
                }   
            }else{
                $finalresponse = array(
                    'status' => 'error'
                );
                echo json_encode($finalresponse);    
            }
        }else{
            $finalresponse = array(
                'status' => 'error'
            );
            echo json_encode($finalresponse);
        }
    }
    
    function searchMissingByImage()
    {
        $name = $_FILES["file"]["name"];
        $ext = end((explode(".", $name)));
        $imageId = time().''.rand(0,10000);
        $fileName = $imageId.'.'.$ext; 
        $imageUploadPath = 'upload/missingfacematch/' . $fileName; 
        $imageTemp = $_FILES["file"]["tmp_name"]; 
        $compressedImage = $this->compressImage($imageTemp, $imageUploadPath, 75); 
        if($compressedImage != '')
        {
            $curl = curl_init();
            curl_setopt_array($curl, array(
              CURLOPT_URL => 'https://api.pixnif.com/api/v1/search-image?awsEventName=All&imageId='.$imageId.'&imageUrl='.base_url().''.$compressedImage,
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => '',
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 0,
              CURLOPT_FOLLOWLOCATION => true,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => 'POST',
              CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                'Authorization: Bearer '.$this->getSettings('facematchtoken')
              ),
            ));
            
            $faceresponse = json_decode(curl_exec($curl),true);
            curl_close($curl);
            if(count($faceresponse) > 0)
            {
                if(count($faceresponse['output']) > 0)
                {
                    $finalresponse = array(
                        'status' => 'success',
                        'finalId' => $faceresponse['output']
                    );
                    echo json_encode($finalresponse);
                }else{
                    $finalresponse = array(
                        'status' => 'error'
                    );
                    echo json_encode($finalresponse);
                }
            }else{
                $finalresponse = array(
                    'status' => 'error'
                );
                echo json_encode($finalresponse);    
            }
        }else{
            $finalresponse = array(
                'status' => 'error'
            );
            echo json_encode($finalresponse);
        }
    }
    
    function searchByImage()
    {
        if(isset($_FILES['file']['name']))
        {
            $name = $_FILES["file"]["name"];
            $ext = end((explode(".", $name)));
            $imageId = time().''.rand(0,10000);
            $fileName = $imageId.'.'.$ext; 
            $imageUploadPath = 'upload/unknownfacematch/' . $fileName; 
            $imageTemp = $_FILES["file"]["tmp_name"]; 
            $compressedImage = $this->compressImage($imageTemp, $imageUploadPath, 75); 
            if($compressedImage != '')
            {
                $curl = curl_init();
                if($_POST['type'] == 'user')
                {
                    $curl = curl_init();
                    $postdata = json_encode(array(
                        "collection_id" => "shivaguptabcaunknownkhoji2",
                        "image_id" => $imageId,
                        "image_url" => base_url().''.$compressedImage,
                        "threshold" => (float)$this->getSettings('afterLoginThreshold')
                    ));
                    curl_setopt_array($curl, array(
                      CURLOPT_URL => 'https://dev-facesearch-ygh-4uub5jkuwq-el.a.run.app',
                      CURLOPT_RETURNTRANSFER => true,
                      CURLOPT_ENCODING => '',
                      CURLOPT_MAXREDIRS => 10,
                      CURLOPT_TIMEOUT => 0,
                      CURLOPT_FOLLOWLOCATION => true,
                      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                      CURLOPT_CUSTOMREQUEST => 'POST',
                      CURLOPT_POSTFIELDS => $postdata,
                      CURLOPT_HTTPHEADER => array(
                        'Content-Type: application/json',
                        'Accept: application/json',
                      ),
                    ));
                    
                    $faceresponse = json_decode(curl_exec($curl),true);
                    curl_close($curl);
                    if(count($faceresponse) > 0)
                    {
                        if(count($faceresponse['output']) > 0)
                        {
                            $finalresponse = array(
                                'status' => 'success',
                                'finalId' => $faceresponse['output']
                            );
                            echo json_encode($finalresponse);
                        }else{
                            $finalresponse = array(
                                'status' => 'error'
                            );
                            echo json_encode($finalresponse);
                        }
                    }else{
                        $finalresponse = array(
                            'status' => 'error'
                        );
                        echo json_encode($finalresponse);    
                    }   
                }else{
                    $curl = curl_init();
                    $postdata = json_encode(array(
                        "collection_id" => "shivaguptabcaunknownkhoji2",
                        "image_id" => $imageId,
                        "image_url" => base_url().''.$compressedImage,
                        "threshold" => (float)$this->getSettings('afterLoginThreshold')
                    ));
                    curl_setopt_array($curl, array(
                      CURLOPT_URL => 'https://dev-facesearch-ygh-4uub5jkuwq-el.a.run.app',
                      CURLOPT_RETURNTRANSFER => true,
                      CURLOPT_ENCODING => '',
                      CURLOPT_MAXREDIRS => 10,
                      CURLOPT_TIMEOUT => 0,
                      CURLOPT_FOLLOWLOCATION => true,
                      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                      CURLOPT_CUSTOMREQUEST => 'POST',
                      CURLOPT_POSTFIELDS => $postdata,
                      CURLOPT_HTTPHEADER => array(
                        'Content-Type: application/json',
                        'Accept: application/json',
                      ),
                    ));
                    
                    $faceresponse = json_decode(curl_exec($curl),true);
                    curl_close($curl);
                    if(count($faceresponse) > 0)
                    {
                        if(count($faceresponse['output']) > 0)
                        {
                            $finalresponse = array(
                                'status' => 'success',
                                'finalId' => $faceresponse['output']
                            );
                            echo json_encode($finalresponse);
                        }else{
                            $finalresponse = array(
                                'status' => 'error'
                            );
                            echo json_encode($finalresponse);
                        }
                    }else{
                        $finalresponse = array(
                            'status' => 'error'
                        );
                        echo json_encode($finalresponse);    
                    }
                }
            }else{
                $finalresponse = array(
                    'status' => 'error'
                );
                echo json_encode($finalresponse);
            }   
        }else{
            $data = $_POST["photo"];
            $image_array_1 = explode(";", $data);
            $split1 = explode('data:image/',$image_array_1[0]);
            $image_array_2 = explode(",", $image_array_1[1]);
            $data = base64_decode($image_array_2[1]);
            $imageId = time().''.rand(0,10000);
            $mainphoto = 'upload/unknownfacematch/'.$imageId.'.'.$split1[1];
            file_put_contents($mainphoto, $data);
            $curl = curl_init();
            if($_POST['type'] == 'user')
            {
                $curl = curl_init();
                $postdata = json_encode(array(
                    "collection_id" => "shivaguptabcaunknownkhoji2",
                    "image_id" => $imageId,
                    "image_url" => base_url().''.$mainphoto,
                    "threshold" => (float)$this->getSettings('policeThreshold')
                ));
                curl_setopt_array($curl, array(
                  CURLOPT_URL => 'https://dev-facesearch-ygh-4uub5jkuwq-el.a.run.app',
                  CURLOPT_RETURNTRANSFER => true,
                  CURLOPT_ENCODING => '',
                  CURLOPT_MAXREDIRS => 10,
                  CURLOPT_TIMEOUT => 0,
                  CURLOPT_FOLLOWLOCATION => true,
                  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                  CURLOPT_CUSTOMREQUEST => 'POST',
                  CURLOPT_POSTFIELDS => $postdata,
                  CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json',
                  ),
                ));
                
                $faceresponse = json_decode(curl_exec($curl),true);
                curl_close($curl);
                if(count($faceresponse) > 0)
                {
                    if(count($faceresponse['output']) > 0)
                    {
                        $finalresponse = array(
                            'status' => 'success',
                            'finalId' => $faceresponse['output']
                        );
                        echo json_encode($finalresponse);
                    }else{
                        $finalresponse = array(
                            'status' => 'error'
                        );
                        echo json_encode($finalresponse);
                    }
                }else{
                    $finalresponse = array(
                        'status' => 'error'
                    );
                    echo json_encode($finalresponse);    
                }   
            }else{
                curl_close($curl);
                $curl = curl_init();
                $postdata = json_encode(array(
                    "collection_id" => "shivaguptabcaunknownkhoji2",
                    "image_id" => $imageId,
                    "image_url" => base_url().''.$mainphoto,
                    "threshold" => (float)$this->getSettings('policeThreshold')
                ));
                curl_setopt_array($curl, array(
                  CURLOPT_URL => 'https://dev-facesearch-ygh-4uub5jkuwq-el.a.run.app',
                  CURLOPT_RETURNTRANSFER => true,
                  CURLOPT_ENCODING => '',
                  CURLOPT_MAXREDIRS => 10,
                  CURLOPT_TIMEOUT => 0,
                  CURLOPT_FOLLOWLOCATION => true,
                  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                  CURLOPT_CUSTOMREQUEST => 'POST',
                  CURLOPT_POSTFIELDS =>'{"collection_id":"shivaguptabcaunknownkhoji2","image_id":"'.$imageId.'","image_url":"'.base_url().''.$mainphoto.'","threshold":'.(float)$this->getSettings('policeThreshold').'}',
                  CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json',
                  ),
                ));
                
                $faceresponse = json_decode(curl_exec($curl),true);
                curl_close($curl);
                if(count($faceresponse) > 0)
                {
                    if(count($faceresponse['output']) > 0)
                    {
                        $finalresponse = array(
                            'status' => 'success',
                            'finalId' => $faceresponse['output']
                        );
                        echo json_encode($finalresponse);
                    }else{
                        $finalresponse = array(
                            'status' => 'error'
                        );
                        echo json_encode($finalresponse);
                    }
                }else{
                    $finalresponse = array(
                        'status' => 'error'
                    );
                    echo json_encode($finalresponse);    
                }
            }
        }
        
    }
    
    function missing_person_filter()
    {
        if($this->session->userdata('police_login') == 'yes')
        {
            if(isset($_GET['pn']))
            {
                if($_GET['pn'] == 2)
                {
                    if($_GET['idNumber'] != '')
                    {
                        if($_GET['idType'] == 'aadhar')
                        {
                            $this->db->where('missingaadhar',$_GET['idNumber']);
                        }
                        if($_GET['idType'] == 'dl')
                        {
                            $this->db->where('missingdl',$_GET['idNumber']);
                        }
                        if($_GET['idType'] == 'pan')
                        {
                            $this->db->where('missingpan',$_GET['idNumber']);
                        }
                        if($_GET['idType'] == 'voter')
                        {
                            $this->db->where('missingvoter',$_GET['idNumber']);
                        }
                    }
                    $this->db->where('dateCreated >=',date('Y-m-d 00:00:00',strtotime($_GET['startFormDate'])));
                	$this->db->where('dateCreated <=',date('Y-m-d 23:59:59',strtotime($_GET['endFormDate'])));
                    $this->db->like('missinggender',$_GET['genderForm']);
                    if(($_GET['personFormName']) != '')
                    {
                        $this->db->like('missingname',$_GET['personFormName']);
                    }
                    if(($_GET['stateForm']) != '')
                    {
                        $this->db->where('fatherstate',$_GET['stateForm']);
                    }
                    if(($_GET['districtForm']) != '')
                    {
                        $this->db->where('fatherdistrict',$_GET['districtForm']);
                    }
                    if(($_GET['cityForm']) != '')
                    {
                        $this->db->where('fathercity',$_GET['cityForm']);
                    }
                    $page_data['data']=$this->db->get('missingperson')->result_array();
                    $rows = count($page_data['data']);
             
                	$page_rows = 100;
                 
                	$last = ceil($rows/$page_rows);
                 
                	if($last < 1){
                		$last = 1;
                	}
                 
                	$pagenum = 1;
                 
                	if(isset($_GET['pn'])){
                		$pagenum = preg_replace('#[^0-9]#', '', $_GET['pn']);
                	}
                 
                	if ($pagenum < 1) { 
                		$pagenum = 1; 
                	} 
                	else if ($pagenum > $last) { 
                		$pagenum = $last; 
                	}
                 
                	$limit = 'LIMIT ' .($pagenum - 1) * $page_rows .',' .$page_rows;
                	$this->db->where('dateCreated >=',date('Y-m-d 00:00:00',strtotime($_GET['startFormDate'])));
                	$this->db->where('dateCreated <=',date('Y-m-d 23:59:59',strtotime($_GET['endFormDate'])));
                    $this->db->where('missinggender',$_GET['genderForm']);
                    if($_GET['idNumber'] != '')
                    {
                        if($_GET['idType'] == 'aadhar')
                        {
                            $this->db->where('missingaadhar',$_GET['idNumber']);
                        }
                        if($_GET['idType'] == 'dl')
                        {
                            $this->db->where('missingdl',$_GET['idNumber']);
                        }
                        if($_GET['idType'] == 'pan')
                        {
                            $this->db->where('missingpan',$_GET['idNumber']);
                        }
                        if($_GET['idType'] == 'voter')
                        {
                            $this->db->where('missingvoter',$_GET['idNumber']);
                        }
                    }
                    $this->db->where('dateCreated >=',date('Y-m-d 00:00:00',strtotime($_GET['startFormDate'])));
                	$this->db->where('dateCreated <=',date('Y-m-d 23:59:59',strtotime($_GET['endFormDate'])));
                    $this->db->where('missinggender',$_GET['genderForm']);
                    if(($_GET['personFormName']) != '')
                    {
                        $this->db->like('missingname',$_GET['personFormName']);
                    }
                    if(($_GET['stateForm']) != '')
                    {
                        $this->db->where('fatherstate',$_GET['stateForm']);
                    }
                    if(($_GET['districtForm']) != '')
                    {
                        $this->db->where('fatherdistrict',$_GET['districtForm']);
                    }
                    if(($_GET['cityForm']) != '')
                    {
                        $this->db->where('fathercity',$_GET['cityForm']);
                    }
                    $this->db->where('isFinalSubmitted',1);
                    $page_data['data']=$this->db->get('missingperson')->result_array();
                // 	$page_data['data']=$this->db->query('select * from unknown_person '.$limit)->result_array();
                 
                	$page_data['paginationCtrls'] = '';
                 
                	if($last != 1){
                    	if ($pagenum > 1) {
                            $previous = $pagenum - 1;
                    		$page_data['paginationCtrls'] .= '<a href="'.base_url().'police/missing_person_filter?pn='.$previous.'" class="btn btn-default mt-0 ms-3">Previous</a> &nbsp; &nbsp; ';
                     
                    		for($i = $pagenum-4; $i < $pagenum; $i++){
                    			if($i > 0){
                    		        $paginationCtrls .= '<a href="'.base_url().'police/missing_person_filter?pn='.$i.'" class="btn btn-default mt-0 ms-3">'.$i.'</a> &nbsp; ';
                    			}
                    	    }
                        }
                     
                    	$page_data['paginationCtrls'] .= ''.$pagenum.' &nbsp; ';
                     
                    	for($i = $pagenum+1; $i <= $last; $i++){
                    		$page_data['paginationCtrls'] .= '<a href="'.base_url().'police/missing_person_filter?pn='.$i.'" class="btn btn-default mt-0 ms-3">'.$i.'</a> &nbsp; ';
                    		if($i >= $pagenum+4){
                    			break;
                    		}
                    	}
                     
                        if ($pagenum != $last) {
                            $next = $pagenum + 1;
                            $page_data['paginationCtrls'] .= ' &nbsp; &nbsp; <a href="'.base_url().'police/missing_person_filter?pn='.$next.'" class="btn btn-default mt-0 ms-3">Next</a> ';
                        }
                	}   
                }else{
                    $page_data['data']= [];
                    $page_data['paginationCtrls'] = '';
                }
            }else{
                $page_data['data']= [];
                $page_data['paginationCtrls'] = '';
            }
        	$page_data['pn'] = 1;
            if(isset($_GET['pn']))
            {
                $page_data['pn'] = $_GET['pn'];    
            }
            $page_data['page_name'] = 'missingperson_data';
            $this->load->view('police/index', $page_data);  
        }else{
            redirect(base_url().'police/login','refresh');
        }
    }
    
    function reactivateComplaint()
    {
        date_default_timezone_set("Asia/Kolkata");
        if($_POST['status'] == 1)
        {
            $this->db->query('update unknown_person set isFound=0, dateCreated="'.date('Y-m-d H:i:s a').'" where id='.$_POST['id']);
        }else{
            $this->db->query('update unknown_person set isFound=1, dateCreated="'.date('Y-m-d H:i:s a').'" where id='.$_POST['id']);
        }
    }
    
    function police_thana_entries()
    {
        if($this->session->userdata('police_login') == 'yes')
        {
            if(isset($_GET['pn']))
            {
                if($_GET['pn'] == 2)
                {
                    if($_GET['idNumber'] != '')
                    {
                        if($_GET['idType'] == 'aadhar')
                        {
                            $this->db->where('aadharNumber',$_GET['idNumber']);
                        }
                        if($_GET['idType'] == 'dl')
                        {
                            $this->db->where('Dl_no',$_GET['idNumber']);
                        }
                        if($_GET['idType'] == 'pan')
                        {
                            $this->db->where('PAN',$_GET['idNumber']);
                        }
                        if($_GET['idType'] == 'voter')
                        {
                            $this->db->where('voter_id',$_GET['idNumber']);
                        }
                        if($_GET['idType'] == 'vehicle')
                        {
                            $this->db->where('vehicle_no',$_GET['idNumber']);
                        }
                        if($_GET['idType'] == 'aadhar')
                        {
                            $this->db->where('aadharNumber',$_GET['idNumber']);
                        }
                    }
                    $this->db->where('dateCreated >=',date('Y-m-d 00:00:00',strtotime($_GET['startFormDate'])));
                	$this->db->where('dateCreated <=',date('Y-m-d 23:59:59',strtotime($_GET['endFormDate'])));
                    $this->db->where('Gender',$_GET['genderForm']);
                    if(($_GET['personFormName']) != '')
                    {
                        $this->db->like('person_name',$_GET['personFormName']);
                    }
                    if(($_GET['personFormName']) != '')
                    {
                        $this->db->like('person_name',$_GET['personFormName']);
                    }
                    if(($_GET['stateForm']) != '')
                    {
                        $this->db->where('state',$_GET['stateForm']);
                    }
                    if(($_GET['districtForm']) != '')
                    {
                        $this->db->where('district',$_GET['districtForm']);
                    }
                    if(($_GET['cityForm']) != '')
                    {
                        $this->db->where('city',$_GET['cityForm']);
                    }
                    $page_data['data']=$this->db->get('unknown_person')->result_array();
                    $rows = count($page_data['data']);
             
                	$page_rows = 100;
                 
                	$last = ceil($rows/$page_rows);
                 
                	if($last < 1){
                		$last = 1;
                	}
                 
                	$pagenum = 1;
                 
                	if(isset($_GET['pn'])){
                		$pagenum = preg_replace('#[^0-9]#', '', $_GET['pn']);
                	}
                 
                	if ($pagenum < 1) { 
                		$pagenum = 1; 
                	} 
                	else if ($pagenum > $last) { 
                		$pagenum = $last; 
                	}
                 
                	$limit = 'LIMIT ' .($pagenum - 1) * $page_rows .',' .$page_rows;
                	$this->db->where('dateCreated >=',date('Y-m-d 00:00:00',strtotime($_GET['startFormDate'])));
                	$this->db->where('dateCreated <=',date('Y-m-d 23:59:59',strtotime($_GET['endFormDate'])));
                    $this->db->where('Gender',$_GET['genderForm']);
                    if($_GET['idNumber'] != '')
                    {
                        if($_GET['idType'] == 'aadhar')
                        {
                            $this->db->where('aadharNumber',$_GET['idNumber']);
                        }
                        if($_GET['idType'] == 'dl')
                        {
                            $this->db->where('Dl_no',$_GET['idNumber']);
                        }
                        if($_GET['idType'] == 'pan')
                        {
                            $this->db->where('PAN',$_GET['idNumber']);
                        }
                        if($_GET['idType'] == 'voter')
                        {
                            $this->db->where('voter_id',$_GET['idNumber']);
                        }
                        if($_GET['idType'] == 'vehicle')
                        {
                            $this->db->where('vehicle_no',$_GET['idNumber']);
                        }
                        if($_GET['idType'] == 'aadhar')
                        {
                            $this->db->where('aadharNumber',$_GET['idNumber']);
                        }
                    }
                    if(($_GET['personFormName']) != '')
                    {
                        $this->db->like('person_name',$_GET['personFormName']);
                    }
                    if(($_GET['stateForm']) != '')
                    {
                        $this->db->where('state',$_GET['stateForm']);
                    }
                    if(($_GET['districtForm']) != '')
                    {
                        $this->db->where('district',$_GET['districtForm']);
                    }
                    if(($_GET['cityForm']) != '')
                    {
                        $this->db->where('city',$_GET['cityForm']);
                    }
                    $this->db->where('isFound',0);
                    $page_data['data']=$this->db->get('unknown_person')->result_array();
                    $finalId = array();
                    if($_GET['idNumber'] != '')
                    {
                        if($_GET['idType'] == 'gold')
                        {
                            if(count($page_data['data']) > 0)
                            {
                                foreach($page_data['data'] as $k=>$v)
                                {
                                    $getGoldDetails = $this->db->query('select * from unknownPersonGold where unknownId='.$v['id'].' and goldType='.$_GET['goldType'].' and goldHUID="'.$_GET['idNumber'].'"')->result_array();
                                    if(count($getGoldDetails) > 0)
                                    {
                                        array_push($finalId,$v['id']);
                                    }
                                }
                            }
                            if(count($finalId) > 0)
                            {
                                $this->db->where_in('id',$finalId);
                                $page_data['data']=$this->db->get('unknown_person')->result_array();
                            }
                        }
                    }
                // 	$page_data['data']=$this->db->query('select * from unknown_person '.$limit)->result_array();
                 
                	$page_data['paginationCtrls'] = '';
                 
                	if($last != 1){
                    	if ($pagenum > 1) {
                            $previous = $pagenum - 1;
                    		$page_data['paginationCtrls'] .= '<a href="'.base_url().'police/unknown_person_filter?pn='.$previous.'" class="btn btn-default mt-0 ms-3">Previous</a> &nbsp; &nbsp; ';
                     
                    		for($i = $pagenum-4; $i < $pagenum; $i++){
                    			if($i > 0){
                    		        $paginationCtrls .= '<a href="'.base_url().'police/unknown_person_filter?pn='.$i.'" class="btn btn-default mt-0 ms-3">'.$i.'</a> &nbsp; ';
                    			}
                    	    }
                        }
                     
                    	$page_data['paginationCtrls'] .= ''.$pagenum.' &nbsp; ';
                     
                    	for($i = $pagenum+1; $i <= $last; $i++){
                    		$page_data['paginationCtrls'] .= '<a href="'.base_url().'police/unknown_person_filter?pn='.$i.'" class="btn btn-default mt-0 ms-3">'.$i.'</a> &nbsp; ';
                    		if($i >= $pagenum+4){
                    			break;
                    		}
                    	}
                     
                        if ($pagenum != $last) {
                            $next = $pagenum + 1;
                            $page_data['paginationCtrls'] .= ' &nbsp; &nbsp; <a href="'.base_url().'police/unknown_person_filter?pn='.$next.'" class="btn btn-default mt-0 ms-3">Next</a> ';
                        }
                	}   
                }else{
                    $page_data['data']= [];
                    $page_data['paginationCtrls'] = '';
                }
            }else{
                $page_data['data']= [];
                $page_data['paginationCtrls'] = '';
            }
        	$page_data['pn'] = 1;
            if(isset($_GET['pn']))
            {
                $page_data['pn'] = $_GET['pn'];    
            }
            $page_data['page_name'] = 'unknownperson_data';
            $this->load->view('police/index', $page_data);  
        }else{
            redirect(base_url().'police/login','refresh');
        }
    }
    
    function lapata_person_filter()
    {
        if($this->session->userdata('police_login') == 'yes')
        {
            if(isset($_GET['pn']))
            {
                if($_GET['pn'] == 2)
                {
                    if($_GET['idNumber'] != '')
                    {
                        if($_GET['idType'] == 'aadhar')
                        {
                            $this->db->where('aadharNumber',$_GET['idNumber']);
                        }
                        if($_GET['idType'] == 'dl')
                        {
                            $this->db->where('Dl_no',$_GET['idNumber']);
                        }
                        if($_GET['idType'] == 'pan')
                        {
                            $this->db->where('PAN',$_GET['idNumber']);
                        }
                        if($_GET['idType'] == 'voter')
                        {
                            $this->db->where('voter_id',$_GET['idNumber']);
                        }
                        if($_GET['idType'] == 'vehicle')
                        {
                            $this->db->where('vehicle_no',$_GET['idNumber']);
                        }
                    }
                    $this->db->where('isFound',0);
                    $this->db->where('dateCreated >=',date('Y-m-d 00:00:00',strtotime($_GET['startFormDate'])));
                    $this->db->where('dateCreated <=',date('Y-m-d 23:59:59',strtotime($_GET['endFormDate'])));
                    if($_GET['genderForm'] != '')
                    {
                        $this->db->where('Gender',$_GET['genderForm']);   
                    }
                    if(($_GET['personFormName']) != '')
                    {
                        $this->db->like('person_name',$_GET['personFormName']);
                    }
                    if(($_GET['personFormName']) != '')
                    {
                        $this->db->like('person_name',$_GET['personFormName']);
                    }
                    if(($_GET['stateForm']) != '')
                    {
                        $this->db->where('state',$_GET['stateForm']);
                    }
                    if(($_GET['districtForm']) != '')
                    {
                        $this->db->where('district',$_GET['districtForm']);
                    }
                    if(($_GET['cityForm']) != '')
                    {
                        $this->db->where('city',$_GET['cityForm']);
                    }
                    if(($_GET['AgeForm']) != '')
                    {
                        $this->db->where('Age',$_GET['AgeForm']);
                    }
                    $this->db->where('uploaded_by','user');
                    $page_data['data']=$this->db->get('unknown_person')->result_array();
                    $finalId = array();
                    if($_GET['idNumber'] != '')
                    {
                        if($_GET['idType'] == 'gold')
                        {
                            if(count($page_data['data']) > 0)
                            {
                                foreach($page_data['data'] as $k=>$v)
                                {
                                    $getGoldDetails = $this->db->query('select * from unknownPersonGold where unknownId='.$v['id'].' and goldHUID="'.$_GET['idNumber'].'"')->result_array();   
                                    if(count($getGoldDetails) > 0)
                                    {
                                        array_push($finalId,$v['id']);
                                    }
                                }
                            }
                            if(count($finalId) > 0)
                            {
                                $this->db->where_in('id',$finalId);
                                $page_data['data']=$this->db->get('unknown_person')->result_array();
                            }else{
                                $page_data['data']= array();
                            }
                        }
                    }
                    $finalId = array();
                    if(count($page_data['data']) > 0)
                    {
                        foreach($page_data['data'] as $k=>$v)
                        {
                            if($v['uploaded_by'] == 'user')
                            {
                                $twentyFourHourAgo= date('Y-m-d H:i:s');
                                $date1 = $twentyFourHourAgo;
                                $date2 = $v['expiryDate'];
                                
                                $diff = abs(strtotime($date2) - strtotime($date1));
                                
                                $years = floor($diff / (365*60*60*24));
                                $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
                                $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
                                if($days != 0 || $months != 0)
                                {
                                    array_push($finalId,$v['id']);
                                }
                            }else{
                                array_push($finalId,$v['id']);
                            }
                        }
                        if(count($finalId) > 0)
                        {
                            $this->db->where_in('id',$finalId);
                            // $limit = 'LIMIT ' .($pagenum - 1) * $page_rows .',' .$page_rows;
                            $page_data['data']=$this->db->get('unknown_person')->result_array();
                        }
                    }
                }
            }
            $page_data['pn'] = 1;
            if(isset($_GET['pn']))
            {
                $page_data['pn'] = $_GET['pn'];    
            }
            $page_data['page_name'] = 'lapataperson_data';
            $this->load->view('police/index', $page_data);  
        }else{
            redirect(base_url().'police/login','refresh');
        }
    }
    
    function unknown_person_filter()
    {
        if($this->session->userdata('police_login') == 'yes')
        {
            if(isset($_GET['pn']))
            {
                if($_GET['pn'] == 2)
                {
                    if($_GET['idNumber'] != '')
                    {
                        if($_GET['idType'] == 'aadhar')
                        {
                            $this->db->where('aadharNumber',$_GET['idNumber']);
                        }
                        if($_GET['idType'] == 'dl')
                        {
                            $this->db->where('Dl_no',$_GET['idNumber']);
                        }
                        if($_GET['idType'] == 'pan')
                        {
                            $this->db->where('PAN',$_GET['idNumber']);
                        }
                        if($_GET['idType'] == 'voter')
                        {
                            $this->db->where('voter_id',$_GET['idNumber']);
                        }
                        if($_GET['idType'] == 'vehicle')
                        {
                            $this->db->where('vehicle_no',$_GET['idNumber']);
                        }
                    }
                    $this->db->where('dateCreated >=',date('Y-m-d 00:00:00',strtotime($_GET['startFormDate'])));
                    $this->db->where('dateCreated <=',date('Y-m-d 23:59:59',strtotime($_GET['endFormDate'])));
                    $this->db->where('Gender',$_GET['genderForm']);
                    if(($_GET['personFormName']) != '')
                    {
                        $this->db->like('person_name',$_GET['personFormName'],'after');
                    }
                    if(($_GET['stateForm']) != '')
                    {
                        $this->db->where('state',$_GET['stateForm']);
                    }
                    if(($_GET['districtForm']) != '')
                    {
                        $this->db->where('district',$_GET['districtForm']);
                    }
                    if(($_GET['cityForm']) != '')
                    {
                        $this->db->where('city',$_GET['cityForm']);
                    }
                    $this->db->where('uploaded_by !=','user');
                    $page_data['data']=$this->db->get('unknown_person')->result_array();
                    $finalId = array();
                    if($_GET['idNumber'] != '')
                    {
                        if($_GET['idType'] == 'gold')
                        {
                            if(count($page_data['data']) > 0)
                            {
                                foreach($page_data['data'] as $k=>$v)
                                {
                                    $getGoldDetails = $this->db->query('select * from unknownPersonGold where unknownId='.$v['id'].' and goldHUID="'.$_GET['idNumber'].'"')->result_array();   
                                    if(count($getGoldDetails) > 0)
                                    {
                                        array_push($finalId,$v['id']);
                                    }
                                }
                            }
                            if(count($finalId) > 0)
                            {
                                $this->db->where_in('id',$finalId);
                                $page_data['data']=$this->db->get('unknown_person')->result_array();
                            }else{
                                $page_data['data']= array();
                            }
                        }
                    }
                }else{
                    $page_data['data']= [];
                    $page_data['paginationCtrls'] = '';
                }
            }else{
                $page_data['data']= [];
                $page_data['paginationCtrls'] = '';
            }
            $page_data['pn'] = 1;
            if(isset($_GET['pn']))
            {
                $page_data['pn'] = $_GET['pn'];    
            }
            $page_data['page_name'] = 'unknownperson_data';
            $this->load->view('police/index', $page_data);  
        }else{
            redirect(base_url().'police/login','refresh');
        }
    }
    
    function saveFilteredPerson()
    {
        if($this->session->userdata('police_login') == 'yes')
        {
            if(isset($_FILES['Photo']['name']))
            {
                $name = $_FILES["Photo"]["name"];
                $ext = end((explode(".", $name)));
                $mainphoto = 'upload/personfilter/'.time().''.rand(0,10000).'.'.$ext;
                move_uploaded_file($_FILES['Photo']['tmp_name'], $mainphoto);     
            }else{
                $mainphoto = NULL;
            }
            $Appli_no= $this->generateApplicationNumber();
            $insertdata = array(
                'aadharNumber' => $_POST['aadharNumber'],
                'PAN' => $_POST['PAN'],
                'DL_no' => $_POST['DL_no'],
                'voter_id' => $_POST['voter_id'],
                'person_name' => $_POST['person_name'],
                'Religion' => $_POST['Religion'],
                'vehicle_no' => $_POST['vehicle_no'],
                'state' => $_POST['state'],
                'district' => $_POST['district'],
                'city' => $_POST['city'],
                'Age' => $_POST['Age'],
                'ngoId' => $_SESSION['police_id'],
                'uploaded_by'=>'police',
                'Height' => $_POST['Height'],
                'Mental_status' => $_POST['Mental'],
                'Message' => $_POST['Message'],
                'vehicle_no' => $_POST['vehicle_no'],
                'Photo' => $mainphoto,
                'Application_no' =>  $Appli_no,
                'Gender' => $_POST['Gender']
            );
            $in=$this->db->insert('personfilter',$insertdata);
            if($in)
            {
                $_SESSION['filterId'] = $this->db->insert_id();
                if($_POST['goldCount']  > 0)
                {
                    for($i=1;$i<=$_POST['goldCount'];$i++)
                    {
                        $goldData = array(
                            'filterId' => $this->db->insert_id(),
                            'goldType' => $_POST['goldType'.$i],
                            'goldHUID' => $_POST['goldHUIDNumber'.$i]
                        );
                        $this->db->insert('filterPersonGold',$goldData);
                    }
                }
                $this->session->set_flashdata('success', 'Record Successfully Saved.  - '. $Appli_no);
                
    
            }
            else
            {
                $this->session->set_flashdata('error', 'No Insert Try Again.');
                
            }
            return redirect( base_url().'police/upload_person_filter?pn=2');
        }else{
            redirect(base_url().'police/login','refresh');
        }
    }
    
    function generateApplicationNumber()
    {
        $getMaxId = $this->db->query('select max(id) as Id from unknown_person')->result_array();
        $id = 1;
        if($getMaxId[0]['Id'] != NULL)
        {
            $id = $getMaxId[0]['Id'] + 1;
        }
        $Appli_no='UNWTIKH'.sprintf("%03d", $id);
        $getIfAlready = $this->db->query('select * from unknown_person where Application_no="'.$Appli_no.'"')->result_array();
        if(count($getIfAlready) == 0)
        {
            return $Appli_no;
        }else{
            return $this->generateApplicationNumber();
        }
    }
    
    function finalUnknownSubmit()
    {
        $mainphoto1 = '';
        $mainphoto2 = '';
        $imageId1 = '';
        $imageId2 = '';
        if($_POST['facematch1'] != '')
        {
            $data = $_POST["facematch1"];
            $image_array_1 = explode(";", $data);
            $split1 = explode('data:image/',$image_array_1[0]);
            $image_array_2 = explode(",", $image_array_1[1]);
            $data = base64_decode($image_array_2[1]);
            $imageId1 = time().''.rand(0,10000);
            $mainphoto1 = 'upload/unknownperson/'.$imageId1.'.'.$split1[1];
            file_put_contents($mainphoto1, $data);
            $curl = curl_init();
            $postdata = json_encode(array(
                "collection_id" => "shivaguptabcaunknownkhoji1",
                "image_id" => $imageId1,
                "image_url" => base_url().''.$mainphoto1
            ));
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://dev-faceindexer-ygh-4uub5jkuwq-el.a.run.app',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => $postdata,
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json',
                    'Authorization: Bearer '.$this->getSettings('facematchtoken')
                ),
            ));
            
            $response = json_decode(curl_exec($curl),true);
            if(count($response) > 0)
            {
                if($response['statusCode'] == 200)
                {
                    if($response['face_count'] != 1)
                    {
                        if($response['face_count'] > 1)
                        {
                            $finalresponse = array(
                                'status' => 'error',
                                'message' => 'Multiple faces detected in image'
                            );
                            echo json_encode($finalresponse);
                        }else{
                            $finalresponse = array(
                                'status' => 'error',
                                'message' => 'No face found in the image'
                            );
                            echo json_encode($finalresponse);
                        }
                    }
                }
            }
        }
        if($_POST['facematch2'] != '')
        {
            $data = $_POST["facematch2"];
            $image_array_1 = explode(";", $data);
            $split1 = explode('data:image/',$image_array_1[0]);
            $image_array_2 = explode(",", $image_array_1[1]);
            $data = base64_decode($image_array_2[1]);
            $imageId2 = time().''.rand(0,10000);
            $mainphoto2 = 'upload/unknownperson/'.$imageId2.'.'.$split1[1];
            file_put_contents($mainphoto2, $data);
            $curl = curl_init();
            $postdata = json_encode(array(
                "collection_id" => "shivaguptabcaunknownkhoji1",
                "image_id" => $imageId1,
                "image_url" => base_url().''.$mainphoto2
            ));
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://dev-faceindexer-ygh-4uub5jkuwq-el.a.run.app',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => $postdata,
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json',
                    'Authorization: Bearer '.$this->getSettings('facematchtoken')
                ),
            ));
            
            $response = json_decode(curl_exec($curl),true);   
            if(count($response) > 0)
            {
                if($response['statusCode'] == 200)
                {
                    if($response['face_count'] != 1)
                    {
                        if($response['face_count'] > 1)
                        {
                            $finalresponse = array(
                                'status' => 'error',
                                'message' => 'Multiple faces detected in image'
                            );
                            echo json_encode($finalresponse);
                        }else{
                            $finalresponse = array(
                                'status' => 'error',
                                'message' => 'No face found in the image'
                            );
                            echo json_encode($finalresponse);
                        }
                    }
                }
            }
        }
        $data = $_POST["facematch"];
        $image_array_1 = explode(";", $data);
        $split1 = explode('data:image/',$image_array_1[0]);
        $image_array_2 = explode(",", $image_array_1[1]);
        $data = base64_decode($image_array_2[1]);
        $imageId = time().''.rand(0,10000);
        $mainphoto = 'upload/unknownperson/'.$imageId.'.'.$split1[1];
        file_put_contents($mainphoto, $data);
        $curl = curl_init();
        $postdata = json_encode(array(
            "collection_id" => "shivaguptabcaunknownkhoji1",
            "image_id" => $imageId1,
            "image_url" => base_url().''.$mainphoto
        ));
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://dev-faceindexer-ygh-4uub5jkuwq-el.a.run.app',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $postdata,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'Authorization: Bearer '.$this->getSettings('facematchtoken')
            ),
        ));
        
        $response = json_decode(curl_exec($curl),true);
        curl_close($curl);
        if(count($response) > 0)
        {
            if($response['statusCode'] == 200)
            {
                if($response['face_count'] == 1)
                {
                    $Appli_no= $this->generateApplicationNumber();
                    $insertdata = array(
                        'imageId1' => ($imageId1 != '' ? $imageId1 : NULL),
                        'imageId2' => ($imageId2 != '' ? $imageId2 : NULL),
                        'Photo1' => ($mainphoto1 != '' ? $mainphoto1 : NULL),
                        'Photo2' => ($mainphoto2 != '' ? $mainphoto2 : NULL),
                        'imageId' => $imageId,
                        'dateCreated' => date('Y-m-d H:i:s A'),
                        'awsEventName' => 'Unknown',
                        'aadharNumber' => $_POST['aadharNumber'],
                        'PAN' => $_POST['PAN'],
                        'DL_no' => $_POST['DL_no'],
                        'voter_id' => $_POST['voter_id'],
                        'person_name' => $_POST['person_name'],
                        'Religion' => $_POST['Religion'],
                        'vehicle_no' => $_POST['vehicle_no'],
                        'state' => $_POST['state'],
                        'district' => $_POST['district'],
                        'city' => $_POST['city'],
                        'Age' => $_POST['Age'],
                        'policeId' => $_SESSION['police_id'],
                        'uploaded_by'=>'police',
                        'Height' => $_POST['Height'],
                        'Mental_status' => $_POST['Mental'],
                        'Message' => $_POST['Message'],
                        'vehicle_no' => $_POST['vehicle_no'],
                        'Photo' => $mainphoto,
                        'Application_no' =>  $Appli_no,
                        'Gender' => $_POST['Gender']
                    );
                    $in=$this->db->insert('unknown_person',$insertdata);
                    if($in)
                    {
                        $_SESSION['unknownId'] = $this->db->insert_id();
                        $getPreviousData = $this->db->query('select * from unknown_person where id='.$_SESSION['unknownId'])->result_array();
                        $profileDetail = $this->db->query('select * from police where police_id='.$_SESSION['police_id'])->result_array();
                        if($getPreviousData[0]['well1'] == NULL)
                        {
                            $updateData = array(
                                'well1' => ($profileDetail[0]['alternate_mobile1'] != NULL ? $profileDetail[0]['alternate_mobile1'] : NULL),
                                'isProfileContact1' =>($profileDetail[0]['alternate_mobile1'] != NULL ? 1 : 0)
                            );   
                            $this->db->where('id',$_SESSION['unknownId']);
                            $this->db->update('unknown_person',$updateData);
                        }
                        if($getPreviousData[0]['well2'] == NULL)
                        {
                            $updateData = array(
                                'well2' => ($profileDetail[0]['alternate_mobile2'] != NULL ? $profileDetail[0]['alternate_mobile2'] : NULL),
                                'isProfileContact2' =>($profileDetail[0]['alternate_mobile2'] != NULL ? 1 : 0)
                            );   
                            $this->db->where('id',$_SESSION['unknownId']);
                            $this->db->update('unknown_person',$updateData);
                        }
                        if($getPreviousData[0]['well3'] == NULL){
                            $updateData = array(
                                'well3' => ($profileDetail[0]['alternate_mobile3'] != NULL ? $profileDetail[0]['alternate_mobile3'] : NULL),
                                'isProfileContact3' =>($profileDetail[0]['alternate_mobile3'] != NULL ? 1 : 0)
                            );   
                            $this->db->where('id',$_SESSION['unknownId']);
                            $this->db->update('unknown_person',$updateData);
                        }
                        if($_POST['goldCount']  > 0)
                        {
                            for($i=1;$i<=$_POST['goldCount'];$i++)
                            {
                                $goldData = array(
                                    'unknownId' => $_SESSION['unknownId'],
                                    'goldType' => $_POST['goldType'.$i],
                                    'goldHUID' => $_POST['goldHUIDNumber'.$i]
                                );
                                $this->db->insert('unknownPersonGold',$goldData);
                            }
                        }
                        $finalresponse = array(
                            'status' => 'success',
                            'applicationNumber' => $Appli_no
                        );
                        echo json_encode($finalresponse);
                    }
                    else
                    {
                        $finalresponse = array(
                            'status' => 'error',
                            'message' => 'No Insert Try Again.'
                        );
                        echo json_encode($finalresponse);
                    }
                }else{
                    if($response['face_count'] > 1)
                    {
                        $finalresponse = array(
                            'status' => 'error',
                            'message' => 'Multiple faces detected in image'
                        );
                        echo json_encode($finalresponse);
                    }else{
                        $finalresponse = array(
                            'status' => 'error',
                            'message' => 'No face found in the image'
                        );
                        echo json_encode($finalresponse);
                    }
                }
            }else{
                $finalresponse = array(
                    'status' => 'error',
                    'message' => 'Please upload valid face match image'
                );
                echo json_encode($finalresponse);
            }   
        }else{
            $finalresponse = array(
                'status' => 'error',
                'message' => 'Please upload valid face match image'
            );
            echo json_encode($finalresponse);
        }
    }
    
    public function with()
    {
        if(isset($_POST['id']))
        {
            if($_FILES['Photo']['name'] != '')
            {
                $mainphoto1 = '';
                $mainphoto2 = '';
                $imageId1 = '';
                $imageId2 = '';
                if($_FILES['Photo1']['name'] != '')
                {
                    $data = $_POST["facematch1"];
                    $image_array_1 = explode(";", $data);
                    $split1 = explode('data:image/',$image_array_1[0]);
                    $image_array_2 = explode(",", $image_array_1[1]);
                    $data = base64_decode($image_array_2[1]);
                    $imageId1 = time().''.rand(0,10000);
                    $mainphoto1 = 'upload/unknownperson/'.$imageId1.'.'.$split1[1];
                    file_put_contents($mainphoto1, $data);
                    $curl = curl_init();
                    $postdata = json_encode(array(
                        "collection_id" => "shivaguptabcaunknownkhoji1",
                        "image_id" => $imageId1,
                        "image_url" => base_url().''.$mainphoto1
                    ));
                    curl_setopt_array($curl, array(
                        CURLOPT_URL => 'https://dev-faceindexer-ygh-4uub5jkuwq-el.a.run.app',
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_ENCODING => '',
                        CURLOPT_MAXREDIRS => 10,
                        CURLOPT_TIMEOUT => 0,
                        CURLOPT_FOLLOWLOCATION => true,
                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                        CURLOPT_CUSTOMREQUEST => 'POST',
                        CURLOPT_POSTFIELDS => $postdata,
                        CURLOPT_HTTPHEADER => array(
                            'Content-Type: application/json',
                            'Authorization: Bearer '.$this->getSettings('facematchtoken')
                        ),
                    ));
                    
                    $response = json_decode(curl_exec($curl),true);
                    if(count($response) > 0)
                    {
                        if($response['statusCode'] == 200)
                        {
                            if($response['face_count'] != 1)
                            {
                                if($response['face_count'] > 1)
                                {
                                    $this->session->set_flashdata('error', 'Multiple faces detected in image');
                                    return redirect( base_url().'police/editUnknownDetails?id='.$_POST['applicationNo']);
                                }else{
                                    $this->session->set_flashdata('error', 'No face found in the image');   
                                    return redirect( base_url().'police/editUnknownDetails?id='.$_POST['applicationNo']);
                                }
                            }
                        }
                    }
                }
                if($_FILES['Photo2']['name'] != '')
                {
                    $data = $_POST["facematch2"];
                    $image_array_1 = explode(";", $data);
                    $split1 = explode('data:image/',$image_array_1[0]);
                    $image_array_2 = explode(",", $image_array_1[1]);
                    $data = base64_decode($image_array_2[1]);
                    $imageId2 = time().''.rand(0,10000);
                    $mainphoto2 = 'upload/unknownperson/'.$imageId2.'.'.$split1[1];
                    file_put_contents($mainphoto2, $data);
                    $curl = curl_init();
                    $postdata = json_encode(array(
                        "collection_id" => "shivaguptabcaunknownkhoji1",
                        "image_id" => $imageId2,
                        "image_url" => base_url().''.$mainphoto2
                    ));
                    curl_setopt_array($curl, array(
                        CURLOPT_URL => 'https://dev-faceindexer-ygh-4uub5jkuwq-el.a.run.app',
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_ENCODING => '',
                        CURLOPT_MAXREDIRS => 10,
                        CURLOPT_TIMEOUT => 0,
                        CURLOPT_FOLLOWLOCATION => true,
                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                        CURLOPT_CUSTOMREQUEST => 'POST',
                        CURLOPT_POSTFIELDS => $postdata,
                        CURLOPT_HTTPHEADER => array(
                            'Content-Type: application/json',
                            'Authorization: Bearer '.$this->getSettings('facematchtoken')
                        ),
                    ));
                    
                    $response = json_decode(curl_exec($curl),true);   
                    if(count($response) > 0)
                    {
                        if($response['statusCode'] == 200)
                        {
                            if($response['face_count'] != 1)
                            {
                                if($response['face_count'] > 1)
                                {
                                    $this->session->set_flashdata('error', 'Multiple faces detected in image');
                                    return redirect( base_url().'police/editUnknownDetails?id='.$_POST['applicationNo']);
                                }else{
                                    $this->session->set_flashdata('error', 'No face found in the image');   
                                    return redirect( base_url().'police/editUnknownDetails?id='.$_POST['applicationNo']);
                                }
                            }
                        }
                    }
                }
                $data = $_POST["facematch"];
                $image_array_1 = explode(";", $data);
                $split1 = explode('data:image/',$image_array_1[0]);
                $image_array_2 = explode(",", $image_array_1[1]);
                $data = base64_decode($image_array_2[1]);
                $imageId = time().''.rand(0,10000);
                $mainphoto = 'upload/unknownperson/'.$imageId.'.'.$split1[1];
                file_put_contents($mainphoto, $data);
                $curl = curl_init();
                $postdata = json_encode(array(
                    "collection_id" => "shivaguptabcaunknownkhoji1",
                    "image_id" => $imageId,
                    "image_url" => base_url().''.$mainphoto
                ));
                curl_setopt_array($curl, array(
                    CURLOPT_URL => 'https://dev-faceindexer-ygh-4uub5jkuwq-el.a.run.app',
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'POST',
                    CURLOPT_POSTFIELDS => $postdata,
                    CURLOPT_HTTPHEADER => array(
                        'Content-Type: application/json',
                        'Authorization: Bearer '.$this->getSettings('facematchtoken')
                    ),
                ));
                
                $response = json_decode(curl_exec($curl),true);
                curl_close($curl);
                if(count($response) > 0)
                {
                    if($response['statusCode'] == 200)
                    {
                        if($response['face_count'] == 1)
                        {
                            $getOldDetail = $this->db->query('select * from unknown_person where id='.$_POST['id'])->result_array();
                            $insertdata = array(
                                'imageId' => $imageId,
                                'imageId1' => ($imageId1 != '' ? $imageId1 : $getOldDetail[0]['imageId1']),
                                'imageId2' => ($imageId2 != '' ? $imageId2 : $getOldDetail[0]['imageId2']),
                                'awsEventName' => 'Unknown',
                                'person_name' => $_POST['person_name'],
                                'aadharNumber' => $_POST['aadharNumber'],
                                'PAN' => $_POST['PAN'],
                                'Photo' => $mainphoto,
                                'Photo1' => ($mainphoto1 != '' ? $mainphoto1 : $getOldDetail[0]['Photo1']),
                                'Photo2' => ($mainphoto2 != '' ? $mainphoto2 : $getOldDetail[0]['Photo2']),
                                'DL_no' => $_POST['DL_no'],
                                'voter_id' => $_POST['voter_id'],
                                'Religion' => $_POST['Religion'],
                                'vehicle_no' => $_POST['vehicle_no'],
                                'state' => $_POST['state'],
                                'district' => $_POST['district'],
                                'city' => $_POST['city'],
                                'Age' => $_POST['Age'],
                                'Height' => $_POST['Height'],
                                'Mental_status' => $_POST['Mental'],
                                'Message' => $_POST['Message'],
                                'vehicle_no' => $_POST['vehicle_no'],
                            );
                            $this->db->where('id',$_POST['id']);
                            $in=$this->db->update('unknown_person',$insertdata);
                            if($in)
                            {
                                if($_POST['goldCount']  > 0)
                                {
                                    for($i=1;$i<=$_POST['goldCount'];$i++)
                                    {
                                        if(isset($_POST['oldId'.$i]))
                                        {
                                            $goldData = array(
                                                'unknownId' => $_POST['id'],
                                                'goldType' => $_POST['goldType'.$i],
                                                'goldHUID' => $_POST['goldHUIDNumber'.$i]
                                            );
                                            $this->db->where('Id',$_POST['oldId'.$i]);
                                            $this->db->update('unknownPersonGold',$goldData);
                                        }else{
                                            $goldData = array(
                                                'unknownId' => $_POST['id'],
                                                'goldType' => $_POST['goldType'.$i],
                                                'goldHUID' => $_POST['goldHUIDNumber'.$i]
                                            );
                                            $this->db->insert('unknownPersonGold',$goldData);   
                                        }
                                    }
                                }
                                $this->session->set_flashdata('success', 'Record Updated Successfully');
                                return redirect( base_url().'police/editUnknownDetails?id='.$_POST['applicationNo'].'&pn=2');
                            }
                            else
                            {
                                $this->session->set_flashdata('error', 'No Update Try Again.');
                                return redirect( base_url().'police/editUnknownDetails?id='.$_POST['applicationNo']);
                            }
                        }else{
                            if($response['face_count'] > 1)
                            {
                                $this->session->set_flashdata('error', 'Multiple faces detected in image');
                                return redirect( base_url().'police/editUnknownDetails?id='.$_POST['applicationNo']);
                            }else{
                                $this->session->set_flashdata('error', 'No face found in the image');   
                                return redirect( base_url().'police/editUnknownDetails?id='.$_POST['applicationNo']);
                            }
                        }
                    }else{
                        $this->session->set_flashdata('error', 'Please upload valid face match image');
                        return redirect( base_url().'police/editUnknownDetails?id='.$_POST['applicationNo']);
                    }   
                }else{
                    $this->session->set_flashdata('error', 'Please upload valid face match image');
                    return redirect( base_url().'police/editUnknownDetails?id='.$_POST['applicationNo']);
                }
            }else{
                $mainphoto1 = '';
                $mainphoto2 = '';
                $imageId1 = '';
                $imageId2 = '';
                if($_FILES['Photo1']['name'] != '')
                {
                    $data = $_POST["facematch1"];
                    $image_array_1 = explode(";", $data);
                    $split1 = explode('data:image/',$image_array_1[0]);
                    $image_array_2 = explode(",", $image_array_1[1]);
                    $data = base64_decode($image_array_2[1]);
                    $imageId1 = time().''.rand(0,10000);
                    $mainphoto1 = 'upload/unknownperson/'.$imageId1.'.'.$split1[1];
                    file_put_contents($mainphoto1, $data);
                    $curl = curl_init();
                    $postdata = json_encode(array(
                        "collection_id" => "shivaguptabcaunknownkhoji1",
                        "image_id" => $imageId1,
                        "image_url" => base_url().''.$mainphoto1
                    ));
                    curl_setopt_array($curl, array(
                        CURLOPT_URL => 'https://dev-faceindexer-ygh-4uub5jkuwq-el.a.run.app',
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_ENCODING => '',
                        CURLOPT_MAXREDIRS => 10,
                        CURLOPT_TIMEOUT => 0,
                        CURLOPT_FOLLOWLOCATION => true,
                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                        CURLOPT_CUSTOMREQUEST => 'POST',
                        CURLOPT_POSTFIELDS => $postdata,
                        CURLOPT_HTTPHEADER => array(
                            'Content-Type: application/json',
                            'Authorization: Bearer '.$this->getSettings('facematchtoken')
                        ),
                    ));
                    
                    $response = json_decode(curl_exec($curl),true);
                    if(count($response) > 0)
                    {
                        if($response['statusCode'] == 200)
                        {
                            if($response['face_count'] != 1)
                            {
                                if($response['face_count'] > 1)
                                {
                                    $this->session->set_flashdata('error', 'Multiple faces detected in image');
                                    return redirect( base_url().'police/editUnknownDetails?id='.$_POST['applicationNo']);
                                }else{
                                    $this->session->set_flashdata('error', 'No face found in the image');   
                                    return redirect( base_url().'police/editUnknownDetails?id='.$_POST['applicationNo']);
                                }
                            }
                        }
                    }
                }
                if($_FILES['Photo2']['name'] != '')
                {
                    $data = $_POST["facematch2"];
                    $image_array_1 = explode(";", $data);
                    $split1 = explode('data:image/',$image_array_1[0]);
                    $image_array_2 = explode(",", $image_array_1[1]);
                    $data = base64_decode($image_array_2[1]);
                    $imageId2 = time().''.rand(0,10000);
                    $mainphoto2 = 'upload/unknownperson/'.$imageId2.'.'.$split1[1];
                    file_put_contents($mainphoto2, $data);
                    $curl = curl_init();
                    $postdata = json_encode(array(
                        "collection_id" => "shivaguptabcaunknownkhoji1",
                        "image_id" => $imageId2,
                        "image_url" => base_url().''.$mainphoto2
                    ));
                    curl_setopt_array($curl, array(
                        CURLOPT_URL => 'https://dev-faceindexer-ygh-4uub5jkuwq-el.a.run.app',
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_ENCODING => '',
                        CURLOPT_MAXREDIRS => 10,
                        CURLOPT_TIMEOUT => 0,
                        CURLOPT_FOLLOWLOCATION => true,
                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                        CURLOPT_CUSTOMREQUEST => 'POST',
                        CURLOPT_POSTFIELDS => $postdata,
                        CURLOPT_HTTPHEADER => array(
                            'Content-Type: application/json',
                            'Authorization: Bearer '.$this->getSettings('facematchtoken')
                        ),
                    ));
                    
                    $response = json_decode(curl_exec($curl),true);   
                    if(count($response) > 0)
                    {
                        if($response['statusCode'] == 200)
                        {
                            if($response['face_count'] != 1)
                            {
                                if($response['face_count'] > 1)
                                {
                                    $this->session->set_flashdata('error', 'Multiple faces detected in image');
                                    return redirect( base_url().'police/editUnknownDetails?id='.$_POST['applicationNo']);
                                }else{
                                    $this->session->set_flashdata('error', 'No face found in the image');   
                                    return redirect( base_url().'police/editUnknownDetails?id='.$_POST['applicationNo']);
                                }
                            }
                        }
                    }
                }
                $getOldDetail = $this->db->query('select * from unknown_person where id='.$_POST['id'])->result_array();
                $insertdata = array(
                    'imageId1' => ($imageId1 != '' ? $imageId1 : $getOldDetail[0]['imageId1']),
                    'imageId2' => ($imageId2 != '' ? $imageId2 : $getOldDetail[0]['imageId2']),
                    'aadharNumber' => $_POST['aadharNumber'],
                    'PAN' => $_POST['PAN'],
                    'Photo1' => ($mainphoto1 != '' ? $mainphoto1 : $getOldDetail[0]['Photo1']),
                    'Photo2' => ($mainphoto2 != '' ? $mainphoto2 : $getOldDetail[0]['Photo2']),
                    'DL_no' => $_POST['DL_no'],
                    'voter_id' => $_POST['voter_id'],
                    'Religion' => $_POST['Religion'],
                    'person_name' => $_POST['person_name'],
                    'vehicle_no' => $_POST['vehicle_no'],
                    'state' => $_POST['state'],
                    'district' => $_POST['district'],
                    'city' => $_POST['city'],
                    'Age' => $_POST['Age'],
                    'Height' => $_POST['Height'],
                    'Mental_status' => $_POST['Mental'],
                    'Message' => $_POST['Message'],
                    'vehicle_no' => $_POST['vehicle_no'],
                );
                $this->db->where('id',$_POST['id']);
                $in=$this->db->update('unknown_person',$insertdata);
                if($in)
                {
                    if($_POST['goldCount']  > 0)
                    {
                        for($i=1;$i<=$_POST['goldCount'];$i++)
                        {
                            if(isset($_POST['oldId'.$i]))
                            {
                                $goldData = array(
                                    'unknownId' => $_POST['id'],
                                    'goldType' => $_POST['goldType'.$i],
                                    'goldHUID' => $_POST['goldHUIDNumber'.$i]
                                );
                                $this->db->where('Id',$_POST['oldId'.$i]);
                                $this->db->update('unknownPersonGold',$goldData);
                            }else{
                                $goldData = array(
                                    'unknownId' => $_POST['id'],
                                    'goldType' => $_POST['goldType'.$i],
                                    'goldHUID' => $_POST['goldHUIDNumber'.$i]
                                );
                                $this->db->insert('unknownPersonGold',$goldData);   
                            }
                        }
                    }
                    $this->session->set_flashdata('success', 'Record Updated Successfully');
                    return redirect( base_url().'police/editUnknownDetails?id='.$_POST['applicationNo'].'&pn=2');
                    
        
                }
                else
                {
                    $this->session->set_flashdata('error', 'No Update Try Again.');
                    return redirect( base_url().'police/editUnknownDetails?id='.$_POST['applicationNo']);
                }
            }
        }else{
            $mainphoto1 = '';
            $mainphoto2 = '';
            $imageId1 = '';
            $imageId2 = '';
            if($_POST['facematch1'] != '')
            {
                $data = $_POST["facematch1"];
                $image_array_1 = explode(";", $data);
                $split1 = explode('data:image/',$image_array_1[0]);
                $image_array_2 = explode(",", $image_array_1[1]);
                $data = base64_decode($image_array_2[1]);
                $imageId1 = time().''.rand(0,10000);
                $mainphoto1 = 'upload/unknownperson/'.$imageId1.'.'.$split1[1];
                file_put_contents($mainphoto1, $data);
                $curl = curl_init();
                $postdata = json_encode(array(
                    "collection_id" => "shivaguptabcaunknownkhoji1",
                    "image_id" => $imageId1,
                    "image_url" => base_url().''.$mainphoto1
                ));
                curl_setopt_array($curl, array(
                    CURLOPT_URL => 'https://dev-faceindexer-ygh-4uub5jkuwq-el.a.run.app',
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'POST',
                    CURLOPT_POSTFIELDS => $postdata,
                    CURLOPT_HTTPHEADER => array(
                        'Content-Type: application/json',
                        'Authorization: Bearer '.$this->getSettings('facematchtoken')
                    ),
                ));
                
                $response = json_decode(curl_exec($curl),true);
                if(count($response) > 0)
                {
                    if($response['statusCode'] == 200)
                    {
                        if($response['face_count'] != 1)
                        {
                            if($response['face_count'] > 1)
                            {
                                $this->session->set_flashdata('error', 'Multiple faces detected in image');
                                return redirect( base_url().'police/upload_detail');
                            }else{
                                $this->session->set_flashdata('error', 'No face found in the image');   
                                return redirect( base_url().'police/upload_detail');
                            }
                        }
                    }
                }
            }
            if($_POST['facematch2'] != '')
            {
                $data = $_POST["facematch2"];
                $image_array_1 = explode(";", $data);
                $split1 = explode('data:image/',$image_array_1[0]);
                $image_array_2 = explode(",", $image_array_1[1]);
                $data = base64_decode($image_array_2[1]);
                $imageId2 = time().''.rand(0,10000);
                $mainphoto2 = 'upload/unknownperson/'.$imageId2.'.'.$split1[1];
                file_put_contents($mainphoto2, $data);
                $curl = curl_init();
                $postdata = json_encode(array(
                    "collection_id" => "shivaguptabcaunknownkhoji1",
                    "image_id" => $imageId2,
                    "image_url" => base_url().''.$mainphoto2
                ));
                curl_setopt_array($curl, array(
                    CURLOPT_URL => 'https://dev-faceindexer-ygh-4uub5jkuwq-el.a.run.app',
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'POST',
                    CURLOPT_POSTFIELDS => $postdata,
                    CURLOPT_HTTPHEADER => array(
                        'Content-Type: application/json',
                        'Authorization: Bearer '.$this->getSettings('facematchtoken')
                    ),
                ));
                
                $response = json_decode(curl_exec($curl),true);   
                if(count($response) > 0)
                {
                    if($response['statusCode'] == 200)
                    {
                        if($response['face_count'] != 1)
                        {
                            if($response['face_count'] > 1)
                            {
                                $this->session->set_flashdata('error', 'Multiple faces detected in image');
                                return redirect( base_url().'police/upload_detail');
                            }else{
                                $this->session->set_flashdata('error', 'No face found in the image');   
                                return redirect( base_url().'police/upload_detail');
                            }
                        }
                    }
                }
            }
            $data = $_POST["facematch"];
            $image_array_1 = explode(";", $data);
            $split1 = explode('data:image/',$image_array_1[0]);
            $image_array_2 = explode(",", $image_array_1[1]);
            $data = base64_decode($image_array_2[1]);
            $imageId = time().''.rand(0,10000);
            $mainphoto = 'upload/unknownperson/'.$imageId.'.'.$split1[1];
            file_put_contents($mainphoto, $data);
            $curl = curl_init();
            $postdata = json_encode(array(
                "collection_id" => "shivaguptabcaunknownkhoji1",
                "image_id" => $imageId,
                "image_url" => base_url().''.$mainphoto
            ));
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://dev-faceindexer-ygh-4uub5jkuwq-el.a.run.app',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => $postdata,
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json',
                    'Authorization: Bearer '.$this->getSettings('facematchtoken')
                ),
            ));
            
            $response = json_decode(curl_exec($curl),true);
            curl_close($curl);
            if(count($response) > 0)
            {
                if($response['statusCode'] == 200)
                {
                    if($response['face_count'] == 1)
                    {
                        $Appli_no= $this->generateApplicationNumber();
                        $profileDetail = $this->db->query('select * from police where police_id='.$_SESSION['police_id'])->result_array();
                        $insertdata = array(
                            'well1' => $profileDetail[0]['registration_mobile'],
                            'dateCreated' => date('Y-m-d H:i:s A'),
                            'imageId' => $imageId,
                            'imageId1' => ($imageId1 != '' ? $imageId1 : NULL),
                            'imageId2' => ($imageId2 != '' ? $imageId2 : NULL),
                            'awsEventName' => 'Unknown',
                            'aadharNumber' => $_POST['aadharNumber'],
                            'PAN' => $_POST['PAN'],
                            'DL_no' => $_POST['DL_no'],
                            'voter_id' => $_POST['voter_id'],
                            'person_name' => $_POST['person_name'],
                            'Religion' => $_POST['Religion'],
                            'vehicle_no' => $_POST['vehicle_no'],
                            'state' => $_POST['state'],
                            'district' => $_POST['district'],
                            'city' => $_POST['city'],
                            'Age' => $_POST['Age'],
                            'policeId' => $_SESSION['police_id'],
                            'uploaded_by'=>'police',
                            'Height' => $_POST['Height'],
                            'Mental_status' => $_POST['Mental'],
                            'Message' => $_POST['Message'],
                            'vehicle_no' => $_POST['vehicle_no'],
                            'Photo' => $mainphoto,
                            'Photo1' => ($mainphoto1 != '' ? $mainphoto1 : NULL),
                            'Photo2' => ($mainphoto2 != '' ? $mainphoto2 : NULL),
                            'Application_no' =>  $Appli_no,
                            'Gender' => $_POST['Gender']
                        );
                        $in=$this->db->insert('unknown_person',$insertdata);
                        if($in)
                        {
                            $_SESSION['unknownId'] = $this->db->insert_id();
                            if($_POST['goldCount']  > 0)
                            {
                                for($i=1;$i<=$_POST['goldCount'];$i++)
                                {
                                    $goldData = array(
                                        'unknownId' => $_SESSION['unknownId'],
                                        'goldType' => $_POST['goldType'.$i],
                                        'goldHUID' => $_POST['goldHUIDNumber'.$i]
                                    );
                                    $this->db->insert('unknownPersonGold',$goldData);
                                }
                            }
                            $this->session->set_flashdata('success', 'Record Successfully Saved.  - '. $Appli_no);
                            return redirect( base_url().'police/upload_detail?pn=2');
                            
                
                        }
                        else
                        {
                            $this->session->set_flashdata('error', 'No Insert Try Again.');
                            return redirect( base_url().'police/upload_detail');
                        }
                    }else{
                        if($response['face_count'] > 1)
                        {
                            $this->session->set_flashdata('error', 'Multiple faces detected in image');
                            return redirect( base_url().'police/upload_detail');
                        }else{
                            $this->session->set_flashdata('error', 'No face found in the image');   
                            return redirect( base_url().'police/upload_detail');
                        }
                    }
                }else{
                    $this->session->set_flashdata('error', 'Please upload valid face match image');
                    return redirect( base_url().'police/upload_detail');
                }   
            }else{
                $this->session->set_flashdata('error', 'Please upload valid face match image');
                return redirect( base_url().'police/upload_detail');
            }   
        }
    }
    
    // end of unknown person
    
      // search vehicle
        function search_vehicle_details($para = '')
    {
        if($para == '')
        {
           
                
            if($this->session->userdata('user_login') == 'yes'){
                $page_data['pn'] = 1;
                if(isset($_GET['pn']))
                {
                    $page_data['pn'] = $_GET['pn'];    
                }
                $page_data['page_name'] = 'search_vehicle_details';
                $page_data['title'] = 'Search Vehicle Details';
                $this->load->view('police/index', $page_data);
            } else {
                redirect('police/login','refresh');
            } 
        }else
        {
            if($para == 'step1')
            {
                $getPreviousDetail = $this->db->query('select * from searchVehicle where Id='.$_SESSION['checkVehicleId'])->result_array();
                if($getPreviousDetail[0]['otp'] == $_POST['otp'])
                {
                    $updatedata = array(
                        'personMob' => $_POST['mobileNumber'],
                        'otp' => NULL
                    );
                    $this->db->where('Id',$_SESSION['checkVehicleId']);
                    $update = $this->db->update('searchVehicle',$updatedata);
                    $response['status'] = 'success';
                }else{
                    $response['status'] = 'error';
                    $response['message'] = 'Invalid OTP';
                }
                echo json_encode($response);
            }
            if($para == 'step2')
            {
                $personName = '';
                $gender = '';
                $aadhar = '';
                $gender = '';
                $isVerified = 'No';
                $isVisible = 0;
                $age = '';
                $address = '';
                $isUserFound = 0;
                $isMissing = 0;
                $isGenderCorrect = 0;
                $isAadharCorrect = 0;
                $isDobCorrect = 0;
                $_POST['dob'] = $_POST['date'].'-'.$_POST['month'].'-'.$_POST['year'];
                $idNumber = '';
                if($_POST['idType'] == 'aadhar')
                {
                    $idNumber = $_POST['aadhar_id'];
                    if(strlen($_POST['aadhar_id']) != 12)
                    {
                        $response = array(
                            'status' => 'error',
                            'message' => 'Aadhar number must be 12 digit number'
                        );
                        echo json_encode($response);
                        return;
                    }
                    $getIfPersonAvailable = $this->db->query('select * from user where aadhar_id="'.$_POST['aadhar_id'].'" and gender="'.$_POST['gender'].'" and dob="'.date('Y-m-d',strtotime($_POST['dob'])).'"')->result_array();
                    $userphoto = '';
                    if(count($getIfPersonAvailable) > 0)
                    {
                        $isVisible = $getIfPersonAvailable[0]['visibility'];
                        $isVerified = 1;
                        $isUserFound = 1;
                        $personName = $getIfPersonAvailable[0]['aadharname'];
                        $gender = $getIfPersonAvailable[0]['gender'];
                        $aadhar = $getIfPersonAvailable[0]['aadhar_id'];
                        $from=new DateTime(date('Y-m-d'));
                        $to   = new DateTime($getIfPersonAvailable[0]['dob']);
                        $age = ($from->diff($to)->y).'- Years';
                        $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                        $userphoto = base_url().''.(($getIfPersonAvailable[0]['aadharphoto'] != NULL) ? $getIfPersonAvailable[0]['aadharphoto'] : $getIfPersonAvailable[0]['facematchphoto']);
                    }
                    $getMissingPerson = $this->db->query('select * from missingperson where missingaadhar="'.$_POST['aadhar_id'].'" and isFound != 1')->result_array();
                    if(count($getMissingPerson) > 0)
                    {
                        $isAadharCorrect = 1;
                        if($getMissingPerson[0]['missinggender'] != NULL)
                        {
                            if($getMissingPerson[0]['missingdob'] == date('Y-m-d',strtotime($_POST['dob'])))
                            {
                                $isDobCorrect = 1;
                            }
                            if(strtolower($getMissingPerson[0]['missinggender']) == strtolower($_POST['gender']))
                            {
                                $isGenderCorrect = 1;
                                if($getMissingPerson[0]['missingdob'] == date('Y-m-d',strtotime($_POST['dob'])))
                                {
                                    $isDobCorrect = 1;
                                    $isMissing = 1;
                                    $personName = $getMissingPerson[0]['missingname'];
                                    $gender = $getMissingPerson[0]['missinggender'];
                                    $aadhar = $getMissingPerson[0]['missingaadhar'];
                                    $from=new DateTime(date('Y-m-d'));
                                    $to   = new DateTime($getMissingPerson[0]['missingdob']);
                                    $age = ($from->diff($to)->y).'- Years';
                                    if(count($getIfPersonAvailable) > 0)
                                    {
                                        $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                                    }else{
                                        $address = $getMissingPerson[0]['fathercity'].','.$getMissingPerson[0]['fatherstate'];
                                    }
                                    if(count($getIfPersonAvailable) == 0)
                                    {
                                        $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                                    }   
                                }
                            }
                        }else{
                            $getFullDetail = $this->db->query('select * from missingpersondetail where missingId='.$getMissingPerson[0]['Id'])->result_array();
                            if(count($getFullDetail) > 0)
                            {
                                if($getFullDetail[0]['dob'] == date('Y-m-d',strtotime($_POST['dob'])))
                                {
                                    $isDobCorrect = 1;
                                }
                                if(strtolower($getFullDetail[0]['gender']) == strtolower($_POST['gender']))
                                {
                                    $isGenderCorrect = 1;
                                    if($getFullDetail[0]['dob'] == date('Y-m-d',strtotime($_POST['dob'])))
                                    {
                                        $isDobCorrect = 1;
                                        $isMissing = 1; 
                                        $personName = $getMissingPerson[0]['missingname'];
                                        $gender = $getMissingPerson[0]['missinggender'];
                                        $aadhar = $getMissingPerson[0]['missingaadhar'];
                                        $from=new DateTime(date('Y-m-d'));
                                        $to   = new DateTime($getMissingPerson[0]['missingdob']);
                                        $age = ($from->diff($to)->y).'- Years';
                                        if(count($getIfPersonAvailable) > 0)
                                        {
                                            $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                                        }else{
                                            $address = $getMissingPerson[0]['fathercity'].','.$getMissingPerson[0]['fatherstate'];
                                        }
                                        if(count($getIfPersonAvailable) == 0)
                                        {
                                            $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                                        }   
                                    }
                                }   
                            }else{
                                $getUserDetail = $this->db->query('select * from user where aadhar_id="'.$_POST['aadhar_id'].'"')->result_array();
                                if(count($getUserDetail) > 0)
                                {
                                    if($getUserDetail[0]['dob'] == date('Y-m-d',strtotime($_POST['dob'])))
                                    {
                                        $isDobCorrect = 1;
                                    }
                                    if(strtolower($getUserDetail[0]['gender']) == strtolower($_POST['gender']))
                                    {
                                        $isGenderCorrect = 1;
                                        if($getUserDetail[0]['dob'] == date('Y-m-d',strtotime($_POST['dob'])))
                                        {
                                            $isDobCorrect = 1;
                                            $isMissing = 1; 
                                            $personName = $getUserDetail[0]['aadharname'];
                                            $gender = $getUserDetail[0]['gender'];
                                            $aadhar = $getUserDetail[0]['aadhar_id'];
                                            $from=new DateTime(date('Y-m-d'));
                                            $to   = new DateTime($getUserDetail[0]['dob']);
                                            $age = ($from->diff($to)->y).'- Years';
                                            $address = $getUserDetail[0]['vtc'].','.$getUserDetail[0]['state'];
                                            if(count($getIfPersonAvailable) == 0)
                                            {
                                                $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                                            }   
                                        }
                                    }
                                }
                            }
                        }
                    }else{
                        $getUserDetail = $this->db->query('select * from user where aadhar_id="'.$_POST['aadhar_id'].'"')->result_array();
                        if(count($getUserDetail) > 0)
                        {
                            $isAadharCorrect = 1;
                            if($getUserDetail[0]['dob'] == date('Y-m-d',strtotime($_POST['dob'])))
                            {
                                $isDobCorrect = 1;
                            }
                            if(strtolower($getUserDetail[0]['gender']) == strtolower($_POST['gender']))
                            {
                                $isGenderCorrect = 1;
                                if($getUserDetail[0]['dob'] == date('Y-m-d',strtotime($_POST['dob'])))
                                {
                                    $isDobCorrect = 1;
                                    $isMissing = 0; 
                                    $personName = $getUserDetail[0]['aadharname'];
                                    $gender = $getUserDetail[0]['gender'];
                                    $aadhar = $getUserDetail[0]['aadhar_id'];
                                    $from=new DateTime(date('Y-m-d'));
                                    $to   = new DateTime($getUserDetail[0]['dob']);
                                    $age = ($from->diff($to)->y).'- Years';
                                    $address = $getUserDetail[0]['vtc'].','.$getUserDetail[0]['state'];
                                    if(count($getIfPersonAvailable) == 0)
                                    {
                                        $userphoto = base_url().''.(($getUserDetail[0]['facematchphoto'] != NULL) ? $getUserDetail[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                                    }   
                                }
                            }
                        }
                    }
                    $insertdata = array(
                        'isPersonFound' => $isUserFound,
                        'isMissing' => $isMissing,
                        'gender' => $_POST['gender'],
                        'dob' => date('Y-m-d',strtotime($_POST['dob'])),
                        'idNumber' => $_POST['aadhar_id'],
                        'idType' => $_POST['idType'],
                    );
                    $this->db->where('Id',$_SESSION['checkId']);
                    $update = $this->db->update('checkperson',$insertdata);
                    if($update)
                    {
                        if($isGenderCorrect == 1 && $isDobCorrect == 1 && $isAadharCorrect == 1)
                        {
                            $response = array(
                                'status' => 'success',
                                'personName' => $personName,
                                'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                                'gender' => strtolower($gender),
                                'age' => $age,
                                'address' => $address,
                                'isAadharCorrect' => $isAadharCorrect,
                                'isDobCorrect' => $isDobCorrect,
                                'isGenderCorrect' => $isGenderCorrect,
                                'message' => 'Person Found',
                                'isVisible' => $isVisible,
                                'isMissing' => $isMissing,
                                'isVerified' => $isVerified,
                                'isRegistered' => $isUserFound,
                                'image' => $userphoto
                            );
                            echo json_encode($response);   
                        }else{
                            $response = array(
                                'status' => 'incorrect',
                                'isAadharCorrect' => $isAadharCorrect,
                                'isDobCorrect' => $isDobCorrect,
                                'isGenderCorrect' => $isGenderCorrect,
                            );
                            echo json_encode($response);   
                        }
                    }else{
                        $response = array(
                            'status' => 'error',
                            'message' => 'Something Went Wrong'
                        );
                        echo json_encode($response);
                    }
                }
                if($_POST['idType'] == 'dl')
                {
                    $idNumber = $_POST['dlNumber'];
                    $getIfAlready = $this->db->query('select * from dllist where dlNumber="'.$idNumber.'"')->result_array();
                    if(count($getIfAlready) > 0)
                    {
                        $getIfPersonAvailable = $this->db->query('select * from user where uid='.$getIfAlready[0]['userId'])->result_array();   
                    }else{
                        $getIfPersonAvailable = array();
                    }
                    $userphoto = '';
                    if(count($getIfPersonAvailable) > 0)
                    {
                        $isVisible = $getIfPersonAvailable[0]['visibility'];
                        $isVerified = 1;
                        $isUserFound = 1;
                        $personName = $getIfPersonAvailable[0]['aadharname'];
                        $gender = $getIfPersonAvailable[0]['gender'];
                        $aadhar = $getIfPersonAvailable[0]['aadhar_id'];
                        $from=new DateTime(date('Y-m-d'));
                        $to   = new DateTime($getIfPersonAvailable[0]['dob']);
                        $age = ($from->diff($to)->y).'- Years';
                        $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                        $userphoto = base_url().''.(($getIfPersonAvailable[0]['aadharphoto'] != NULL) ? $getIfPersonAvailable[0]['aadharphoto'] : $getIfPersonAvailable[0]['facematchphoto']);
                    }
                    if(count($getIfPersonAvailable) > 0)
                    {
                        $getMissingPerson = $this->db->query('select * from missingperson where missingaadhar="'.$getIfPersonAvailable[0]['aadhar_id'].'" and isFound != 1')->result_array();   
                    }else{
                        $getMissingPerson = array();
                    }
                    if(count($getMissingPerson) > 0)
                    {
                        $isAadharCorrect = 1;
                        if($getMissingPerson[0]['missinggender'] != NULL)
                        {
                            if($getMissingPerson[0]['missingdob'] == date('Y-m-d',strtotime($_POST['dob'])))
                            {
                                $isDobCorrect = 1;
                            }
                            if(strtolower($getMissingPerson[0]['missinggender']) == strtolower($_POST['gender']))
                            {
                                $isGenderCorrect = 1;
                                if($getMissingPerson[0]['missingdob'] == date('Y-m-d',strtotime($_POST['dob'])))
                                {
                                    $isDobCorrect = 1;
                                    $isMissing = 1;
                                    $personName = $getMissingPerson[0]['missingname'];
                                    $gender = $getMissingPerson[0]['missinggender'];
                                    $aadhar = $getMissingPerson[0]['missingaadhar'];
                                    $from=new DateTime(date('Y-m-d'));
                                    $to   = new DateTime($getMissingPerson[0]['missingdob']);
                                    $age = ($from->diff($to)->y).'- Years';
                                    if(count($getIfPersonAvailable) > 0)
                                    {
                                        $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                                    }else{
                                        $address = $getMissingPerson[0]['fathercity'].','.$getMissingPerson[0]['fatherstate'];
                                    }
                                    if(count($getIfPersonAvailable) == 0)
                                    {
                                        $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                                    }   
                                }
                            }
                        }else{
                            $getFullDetail = $this->db->query('select * from missingpersondetail where missingId='.$getMissingPerson[0]['Id'])->result_array();
                            if(count($getFullDetail) > 0)
                            {
                                if($getFullDetail[0]['dob'] == date('Y-m-d',strtotime($_POST['dob'])))
                                {
                                    $isDobCorrect = 1;
                                }
                                if(strtolower($getFullDetail[0]['gender']) == strtolower($_POST['gender']))
                                {
                                    $isGenderCorrect = 1;
                                    if($getFullDetail[0]['dob'] == date('Y-m-d',strtotime($_POST['dob'])))
                                    {
                                        $isDobCorrect = 1;
                                        $isMissing = 1; 
                                        $personName = $getMissingPerson[0]['missingname'];
                                        $gender = $getMissingPerson[0]['missinggender'];
                                        $aadhar = $getMissingPerson[0]['missingaadhar'];
                                        $from=new DateTime(date('Y-m-d'));
                                        $to   = new DateTime($getMissingPerson[0]['missingdob']);
                                        $age = ($from->diff($to)->y).'- Years';
                                        if(count($getIfPersonAvailable) > 0)
                                        {
                                            $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                                        }else{
                                            $address = $getMissingPerson[0]['fathercity'].','.$getMissingPerson[0]['fatherstate'];
                                        }
                                        if(count($getIfPersonAvailable) == 0)
                                        {
                                            $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                                        }   
                                    }
                                }   
                            }else{
                                $getUserDetail = $this->db->query('select * from user where aadhar_id="'.$getIfPersonAvailable[0]['aadhar_id'].'"')->result_array();
                                if(count($getUserDetail) > 0)
                                {
                                    if($getUserDetail[0]['dob'] == date('Y-m-d',strtotime($_POST['dob'])))
                                    {
                                        $isDobCorrect = 1;
                                    }
                                    if(strtolower($getUserDetail[0]['gender']) == strtolower($_POST['gender']))
                                    {
                                        $isGenderCorrect = 1;
                                        if($getUserDetail[0]['dob'] == date('Y-m-d',strtotime($_POST['dob'])))
                                        {
                                            $isDobCorrect = 1;
                                            $isMissing = 1; 
                                            $personName = $getUserDetail[0]['aadharname'];
                                            $gender = $getUserDetail[0]['gender'];
                                            $aadhar = $getUserDetail[0]['aadhar_id'];
                                            $from=new DateTime(date('Y-m-d'));
                                            $to   = new DateTime($getUserDetail[0]['dob']);
                                            $age = ($from->diff($to)->y).'- Years';
                                            $address = $getUserDetail[0]['vtc'].','.$getUserDetail[0]['state'];
                                            
                                            if(count($getIfPersonAvailable) == 0)
                                            {
                                                $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                                            }   
                                        }
                                    }
                                }
                            }
                        }
                    }else{
                        if(count($getIfPersonAvailable) > 0)
                        {
                            $getUserDetail = $this->db->query('select * from user where aadhar_id="'.$getIfPersonAvailable[0]['aadhar_id'].'"')->result_array();   
                        }else{
                            $getUserDetail = array();
                        }
                        if(count($getUserDetail) > 0)
                        {
                            $isAadharCorrect = 1;
                            if($getUserDetail[0]['dob'] == date('Y-m-d',strtotime($_POST['dob'])))
                            {
                                $isDobCorrect = 1;
                            }
                            if(strtolower($getUserDetail[0]['gender']) == strtolower($_POST['gender']))
                            {
                                $isGenderCorrect = 1;
                                if($getUserDetail[0]['dob'] == date('Y-m-d',strtotime($_POST['dob'])))
                                {
                                    $isDobCorrect = 1;
                                    $isMissing = 0; 
                                    $personName = $getUserDetail[0]['aadharname'];
                                    $gender = $getUserDetail[0]['gender'];
                                    $aadhar = $getUserDetail[0]['aadhar_id'];
                                    $from=new DateTime(date('Y-m-d'));
                                    $to   = new DateTime($getUserDetail[0]['dob']);
                                    $age = ($from->diff($to)->y).'- Years';
                                    $address = $getUserDetail[0]['vtc'].','.$getUserDetail[0]['state'];
                                    if(count($getIfPersonAvailable) == 0)
                                    {
                                        $userphoto = base_url().''.(($getUserDetail[0]['facematchphoto'] != NULL) ? $getUserDetail[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                                    }   
                                }
                            }
                        }
                    }
                    $insertdata = array(
                        'isPersonFound' => $isUserFound,
                        'isMissing' => $isMissing,
                        'gender' => $_POST['gender'],
                        'dob' => date('Y-m-d',strtotime($_POST['dob'])),
                        'idNumber' => $_POST['dlNumber'],
                        'idType' => $_POST['idType'],
                    );
                    $this->db->where('Id',$_SESSION['checkId']);
                    $update = $this->db->update('checkperson',$insertdata);
                    if($insert)
                    {
                        if($isGenderCorrect == 1 && $isDobCorrect == 1 && $isAadharCorrect == 1)
                        {
                            $response = array(
                                'status' => 'success',
                                'isVisible' => $isVisible,
                                'personName' => $personName,
                                'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                                'gender' => strtolower($gender),
                                'age' => $age,
                                'address' => $address,
                                'isAadharCorrect' => $isAadharCorrect,
                                'isDobCorrect' => $isDobCorrect,
                                'isGenderCorrect' => $isGenderCorrect,
                                'message' => 'Person Found',
                                'isMissing' => $isMissing,
                                'isVerified' => $isVerified,
                                'isRegistered' => $isUserFound,
                                'image' => $userphoto
                            );
                            echo json_encode($response);   
                        }else{
                            $response = array(
                                'status' => 'incorrect',
                                'isAadharCorrect' => $isAadharCorrect,
                                'isDobCorrect' => $isDobCorrect,
                                'isGenderCorrect' => $isGenderCorrect,
                            );
                            echo json_encode($response);   
                        }
                    }else{
                        $response = array(
                            'status' => 'error',
                            'message' => 'Something Went Wrong'
                        );
                        echo json_encode($response);
                    }
                }
                if($_POST['idType'] == 'voter')
                {
                    $idNumber = $_POST['voterId'];
                    $getIfAlready = $this->db->query('select * from voterslist where voterNumber="'.$idNumber.'"')->result_array();
                    if(count($getIfAlready) > 0)
                    {
                        $getIfPersonAvailable = $this->db->query('select * from user where uid='.$getIfAlready[0]['userId'].' and gender="'.$_POST['gender'].'" and dob="'.date('Y-m-d',strtotime($_POST['dob'])).'"')->result_array();   
                    }else{
                        $getIfPersonAvailable = array();
                    }
                    $userphoto = '';
                    if(count($getIfPersonAvailable) > 0)
                    {
                        $isVisible = $getIfPersonAvailable[0]['visibility'];
                        $isUserFound = 1;
                        $isVerified = 1;
                        $personName = $getIfPersonAvailable[0]['aadharname'];
                        $gender = $getIfPersonAvailable[0]['gender'];
                        $aadhar = $getIfPersonAvailable[0]['aadhar_id'];
                        $from=new DateTime(date('Y-m-d'));
                        $to   = new DateTime($getIfPersonAvailable[0]['dob']);
                        $age = ($from->diff($to)->y).'- Years';
                        $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                        $userphoto = base_url().''.(($getIfPersonAvailable[0]['aadharphoto'] != NULL) ? $getIfPersonAvailable[0]['aadharphoto'] : $getIfPersonAvailable[0]['facematchphoto']);
                    }
                    if(count($getIfPersonAvailable) > 0)
                    {
                        $getMissingPerson = $this->db->query('select * from missingperson where missingaadhar="'.$getIfPersonAvailable[0]['aadhar_id'].'" and isFound != 1')->result_array();   
                    }else{
                        $getMissingPerson = array();
                    }
                    if(count($getMissingPerson) > 0)
                    {
                        $isAadharCorrect = 1;
                        if($getMissingPerson[0]['missinggender'] != NULL)
                        {
                            if($getMissingPerson[0]['missingdob'] == date('Y-m-d',strtotime($_POST['dob'])))
                            {
                                $isDobCorrect = 1;
                            }
                            if(strtolower($getMissingPerson[0]['missinggender']) == strtolower($_POST['gender']))
                            {
                                $isGenderCorrect = 1;
                                if($getMissingPerson[0]['missingdob'] == date('Y-m-d',strtotime($_POST['dob'])))
                                {
                                    $isDobCorrect = 1;
                                    $isMissing = 1;
                                    $personName = $getMissingPerson[0]['missingname'];
                                    $gender = $getMissingPerson[0]['missinggender'];
                                    $aadhar = $getMissingPerson[0]['missingaadhar'];
                                    $from=new DateTime(date('Y-m-d'));
                                    $to   = new DateTime($getMissingPerson[0]['missingdob']);
                                    $age = ($from->diff($to)->y).'- Years';
                                    if(count($getIfPersonAvailable) > 0)
                                    {
                                        $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                                    }else{
                                        $address = $getMissingPerson[0]['fathercity'].','.$getMissingPerson[0]['fatherstate'];
                                    }
                                    if(count($getIfPersonAvailable) == 0)
                                    {
                                        $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                                    }   
                                }
                            }
                        }else{
                            $getFullDetail = $this->db->query('select * from missingpersondetail where missingId='.$getMissingPerson[0]['Id'])->result_array();
                            if(count($getFullDetail) > 0)
                            {
                                if($getFullDetail[0]['dob'] == date('Y-m-d',strtotime($_POST['dob'])))
                                {
                                    $isDobCorrect = 1;
                                }
                                if(strtolower($getFullDetail[0]['gender']) == strtolower($_POST['gender']))
                                {
                                    $isGenderCorrect = 1;
                                    if($getFullDetail[0]['dob'] == date('Y-m-d',strtotime($_POST['dob'])))
                                    {
                                        $isDobCorrect = 1;
                                        $isMissing = 1; 
                                        $personName = $getMissingPerson[0]['missingname'];
                                        $gender = $getMissingPerson[0]['missinggender'];
                                        $aadhar = $getMissingPerson[0]['missingaadhar'];
                                        $from=new DateTime(date('Y-m-d'));
                                        $to   = new DateTime($getMissingPerson[0]['missingdob']);
                                        $age = ($from->diff($to)->y).'- Years';
                                        if(count($getIfPersonAvailable) > 0)
                                        {
                                            $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                                        }else{
                                            $address = $getMissingPerson[0]['fathercity'].','.$getMissingPerson[0]['fatherstate'];
                                        }
                                        if(count($getIfPersonAvailable) == 0)
                                        {
                                            $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                                        }   
                                    }
                                }   
                            }else{
                                $getUserDetail = $this->db->query('select * from user where aadhar_id="'.$getIfPersonAvailable[0]['aadhar_id'].'"')->result_array();
                                if(count($getUserDetail) > 0)
                                {
                                    if($getUserDetail[0]['dob'] == date('Y-m-d',strtotime($_POST['dob'])))
                                    {
                                        $isDobCorrect = 1;
                                    }
                                    if(strtolower($getUserDetail[0]['gender']) == strtolower($_POST['gender']))
                                    {
                                        $isGenderCorrect = 1;
                                        if($getUserDetail[0]['dob'] == date('Y-m-d',strtotime($_POST['dob'])))
                                        {
                                            $isDobCorrect = 1;
                                            $isMissing = 1; 
                                            $personName = $getUserDetail[0]['aadharname'];
                                            $gender = $getUserDetail[0]['gender'];
                                            $aadhar = $getUserDetail[0]['aadhar_id'];
                                            $from=new DateTime(date('Y-m-d'));
                                            $to   = new DateTime($getUserDetail[0]['dob']);
                                            $age = ($from->diff($to)->y).'- Years';
                                            $address = $getUserDetail[0]['vtc'].','.$getUserDetail[0]['state'];
                                            if(count($getIfPersonAvailable) == 0)
                                            {
                                                $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                                            }   
                                        }
                                    }
                                }
                            }
                        }
                    }else{
                        if(count($getIfPersonAvailable) > 0)
                        {
                            $getUserDetail = $this->db->query('select * from user where aadhar_id="'.$getIfPersonAvailable[0]['aadhar_id'].'"')->result_array();   
                        }else{
                            $getUserDetail = array();
                        }
                        if(count($getUserDetail) > 0)
                        {
                            $isAadharCorrect = 1;
                            if($getUserDetail[0]['dob'] == date('Y-m-d',strtotime($_POST['dob'])))
                            {
                                $isDobCorrect = 1;
                            }
                            if(strtolower($getUserDetail[0]['gender']) == strtolower($_POST['gender']))
                            {
                                $isGenderCorrect = 1;
                                if($getUserDetail[0]['dob'] == date('Y-m-d',strtotime($_POST['dob'])))
                                {
                                    $isDobCorrect = 1;
                                    $isMissing = 0; 
                                    $personName = $getUserDetail[0]['aadharname'];
                                    $gender = $getUserDetail[0]['gender'];
                                    $aadhar = $getUserDetail[0]['aadhar_id'];
                                    $from=new DateTime(date('Y-m-d'));
                                    $to   = new DateTime($getUserDetail[0]['dob']);
                                    $age = ($from->diff($to)->y).'- Years';
                                    $address = $getUserDetail[0]['vtc'].','.$getUserDetail[0]['state'];
                                    if(count($getIfPersonAvailable) == 0)
                                    {
                                        $userphoto = base_url().''.(($getUserDetail[0]['facematchphoto'] != NULL) ? $getUserDetail[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                                    }   
                                }
                            }
                        }
                    }
                    $insertdata = array(
                        'isPersonFound' => $isUserFound,
                        'isMissing' => $isMissing,
                        'gender' => $_POST['gender'],
                        'dob' => date('Y-m-d',strtotime($_POST['dob'])),
                        'idNumber' => $_POST['voterId'],
                        'idType' => $_POST['idType'],
                    );
                    $this->db->where('Id',$_SESSION['checkId']);
                    $update = $this->db->update('checkperson',$insertdata);
                    if($update)
                    {
                        if($isGenderCorrect == 1 && $isDobCorrect == 1 && $isAadharCorrect == 1)
                        {
                            $response = array(
                                'status' => 'success',
                                'isVisible'=> $isVisible,
                                'personName' => $personName,
                                'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                                'gender' => strtolower($gender),
                                'age' => $age,
                                'address' => $address,
                                'isAadharCorrect' => $isAadharCorrect,
                                'isDobCorrect' => $isDobCorrect,
                                'isGenderCorrect' => $isGenderCorrect,
                                'message' => 'Person Found',
                                'isMissing' => $isMissing,
                                'isVerified' => $isVerified,
                                'isRegistered' => $isUserFound,
                                'image' => $userphoto
                            );
                            echo json_encode($response);   
                        }else{
                            $response = array(
                                'status' => 'incorrect',
                                'isAadharCorrect' => $isAadharCorrect,
                                'isDobCorrect' => $isDobCorrect,
                                'isGenderCorrect' => $isGenderCorrect,
                            );
                            echo json_encode($response);   
                        }
                    }else{
                        $response = array(
                            'status' => 'error',
                            'message' => 'Something Went Wrong'
                        );
                        echo json_encode($response);
                    }
                }
                if($_POST['idType'] == 'pan')
                {
                    $idNumber = $_POST['panNumber'];
                    $getIfAlready = $this->db->query('select * from panlist where panNumber="'.$idNumber.'"')->result_array();
                    if(count($getIfAlready) > 0)
                    {
                        $getIfPersonAvailable = $this->db->query('select * from user where uid='.$getIfAlready[0]['userId'])->result_array();   
                    }else{
                        $getIfPersonAvailable = array();
                    }
                    $userphoto = '';
                    if(count($getIfPersonAvailable) > 0)
                    {
                        $isVisible = $getIfPersonAvailable[0]['visibility'];
                        $isUserFound = 1;
                        $isVerified = 1;
                        $personName = $getIfPersonAvailable[0]['aadharname'];
                        $gender = $getIfPersonAvailable[0]['gender'];
                        $aadhar = $getIfPersonAvailable[0]['aadhar_id'];
                        $from=new DateTime(date('Y-m-d'));
                        $to   = new DateTime($getIfPersonAvailable[0]['dob']);
                        $age = ($from->diff($to)->y).'- Years';
                        $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                        $userphoto = base_url().''.(($getIfPersonAvailable[0]['aadharphoto'] != NULL) ? $getIfPersonAvailable[0]['aadharphoto'] : $getIfPersonAvailable[0]['facematchphoto']);
                    }
                    if(count($getIfPersonAvailable) > 0)
                    {
                        $getMissingPerson = $this->db->query('select * from missingperson where missingaadhar="'.$getIfPersonAvailable[0]['aadhar_id'].'" and isFound != 1')->result_array();   
                    }else{
                        $getMissingPerson = array();
                    }
                    if(count($getMissingPerson) > 0)
                    {
                        $isAadharCorrect = 1;
                        if($getMissingPerson[0]['missinggender'] != NULL)
                        {
                            if($getMissingPerson[0]['missingdob'] == date('Y-m-d',strtotime($_POST['dob'])))
                            {
                                $isDobCorrect = 1;
                            }
                            if(strtolower($getMissingPerson[0]['missinggender']) == strtolower($_POST['gender']))
                            {
                                $isGenderCorrect = 1;
                                if($getMissingPerson[0]['missingdob'] == date('Y-m-d',strtotime($_POST['dob'])))
                                {
                                    $isDobCorrect = 1;
                                    $isMissing = 1;
                                    $personName = $getMissingPerson[0]['missingname'];
                                    $gender = $getMissingPerson[0]['missinggender'];
                                    $aadhar = $getMissingPerson[0]['missingaadhar'];
                                    $from=new DateTime(date('Y-m-d'));
                                    $to   = new DateTime($getMissingPerson[0]['missingdob']);
                                    $age = ($from->diff($to)->y).'- Years';
                                    if(count($getIfPersonAvailable) > 0)
                                    {
                                        $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                                    }else{
                                        $address = $getMissingPerson[0]['fathercity'].','.$getMissingPerson[0]['fatherstate'];
                                    }
                                    if(count($getIfPersonAvailable) == 0)
                                    {
                                        $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                                    }   
                                }
                            }
                        }else{
                            $getFullDetail = $this->db->query('select * from missingpersondetail where missingId='.$getMissingPerson[0]['Id'])->result_array();
                            if(count($getFullDetail) > 0)
                            {
                                if($getFullDetail[0]['dob'] == date('Y-m-d',strtotime($_POST['dob'])))
                                {
                                    $isDobCorrect = 1;
                                }
                                if(strtolower($getFullDetail[0]['gender']) == strtolower($_POST['gender']))
                                {
                                    $isGenderCorrect = 1;
                                    if($getFullDetail[0]['dob'] == date('Y-m-d',strtotime($_POST['dob'])))
                                    {
                                        $isDobCorrect = 1;
                                        $isMissing = 1; 
                                        $personName = $getMissingPerson[0]['missingname'];
                                        $gender = $getMissingPerson[0]['missinggender'];
                                        $aadhar = $getMissingPerson[0]['missingaadhar'];
                                        $from=new DateTime(date('Y-m-d'));
                                        $to   = new DateTime($getMissingPerson[0]['missingdob']);
                                        $age = ($from->diff($to)->y).'- Years';
                                        if(count($getIfPersonAvailable) > 0)
                                        {
                                            $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                                        }else{
                                            $address = $getMissingPerson[0]['fathercity'].','.$getMissingPerson[0]['fatherstate'];
                                        }
                                        if(count($getIfPersonAvailable) == 0)
                                        {
                                            $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                                        }   
                                    }
                                }   
                            }else{
                                $getUserDetail = $this->db->query('select * from user where aadhar_id="'.$getIfPersonAvailable[0]['aadhar_id'].'"')->result_array();
                                if(count($getUserDetail) > 0)
                                {
                                    if($getUserDetail[0]['dob'] == date('Y-m-d',strtotime($_POST['dob'])))
                                    {
                                        $isDobCorrect = 1;
                                    }
                                    if(strtolower($getUserDetail[0]['gender']) == strtolower($_POST['gender']))
                                    {
                                        $isGenderCorrect = 1;
                                        if($getUserDetail[0]['dob'] == date('Y-m-d',strtotime($_POST['dob'])))
                                        {
                                            $isDobCorrect = 1;
                                            $isMissing = 1; 
                                            $personName = $getUserDetail[0]['aadharname'];
                                            $gender = $getUserDetail[0]['gender'];
                                            $aadhar = $getUserDetail[0]['aadhar_id'];
                                            $from=new DateTime(date('Y-m-d'));
                                            $to   = new DateTime($getUserDetail[0]['dob']);
                                            $age = ($from->diff($to)->y).'- Years';
                                            $address = $getUserDetail[0]['vtc'].','.$getUserDetail[0]['state'];
                                            if(count($getIfPersonAvailable) == 0)
                                            {
                                                $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                                            }   
                                        }
                                    }
                                }
                            }
                        }
                    }else{
                        if(count($getIfPersonAvailable) > 0)
                        {
                            $getUserDetail = $this->db->query('select * from user where aadhar_id="'.$getIfPersonAvailable[0]['aadhar_id'].'"')->result_array();   
                        }else{
                            $getUserDetail = array();
                        }
                        if(count($getUserDetail) > 0)
                        {
                            $isAadharCorrect = 1;
                            if($getUserDetail[0]['dob'] == date('Y-m-d',strtotime($_POST['dob'])))
                            {
                                $isDobCorrect = 1;
                            }
                            if(strtolower($getUserDetail[0]['gender']) == strtolower($_POST['gender']))
                            {
                                $isGenderCorrect = 1;
                                if($getUserDetail[0]['dob'] == date('Y-m-d',strtotime($_POST['dob'])))
                                {
                                    $isDobCorrect = 1;
                                    $isMissing = 0; 
                                    $personName = $getUserDetail[0]['aadharname'];
                                    $gender = $getUserDetail[0]['gender'];
                                    $aadhar = $getUserDetail[0]['aadhar_id'];
                                    $from=new DateTime(date('Y-m-d'));
                                    $to   = new DateTime($getUserDetail[0]['dob']);
                                    $age = ($from->diff($to)->y).'- Years';
                                    $address = $getUserDetail[0]['vtc'].','.$getUserDetail[0]['state'];
                                    if(count($getIfPersonAvailable) == 0)
                                    {
                                        $userphoto = base_url().''.(($getUserDetail[0]['facematchphoto'] != NULL) ? $getUserDetail[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                                    }   
                                }
                            }
                        }
                    }
                    $insertdata = array(
                        'isPersonFound' => $isUserFound,
                        'isMissing' => $isMissing,
                        'gender' => $_POST['gender'],
                        'dob' => date('Y-m-d',strtotime($_POST['dob'])),
                        'idNumber' => $_POST['panNumber'],
                        'idType' => $_POST['idType'],
                    );
                    $this->db->where('Id',$_SESSION['checkId']);
                    $update = $this->db->update('checkperson',$insertdata);
                    if($update)
                    {
                        if($isGenderCorrect == 1 && $isDobCorrect == 1 && $isAadharCorrect == 1)
                        {
                            $response = array(
                                'status' => 'success',
                                'isVisible' => $isVisible,
                                'personName' => $personName,
                                'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                                'gender' => strtolower($gender),
                                'age' => $age,
                                'address' => $address,
                                'isAadharCorrect' => $isAadharCorrect,
                                'isDobCorrect' => $isDobCorrect,
                                'isGenderCorrect' => $isGenderCorrect,
                                'message' => 'Person Found',
                                'isMissing' => $isMissing,
                                'isRegistered' => $isUserFound,
                                'isVerified' => $isVerified,
                                'image' => $userphoto
                            );
                            echo json_encode($response);   
                        }else{
                            $response = array(
                                'status' => 'incorrect',
                                'isAadharCorrect' => $isAadharCorrect,
                                'isDobCorrect' => $isDobCorrect,
                                'isGenderCorrect' => $isGenderCorrect,
                            );
                            echo json_encode($response);   
                        }
                    }else{
                        $response = array(
                            'status' => 'error',
                            'message' => 'Something Went Wrong'
                        );
                        echo json_encode($response);
                    }
                }   
            }
        }
    }
    
    function checkVehicleIdAfterLogin()
    {
        $personName = '';
        $vehicleNumber = '';
        $city = '';
        $state = '';
        $isVerified = 'No';
        $isVisible = 0;
        $isUserFound = 0;
        $isMissing = 0;
        $isAadharCorrect = 0;
        $idNumber = '';
        if($_POST['searchType'] == 'vehicleNumber')
        {
            $idNumber = $_POST['idNumber'];
            $getIfVehicleAvailable = $this->db->query('select * from vehicles where rcNumber="'.$_POST['idNumber'].'" and isdeleted!=1 and paymentStatus=1')->result_array();
            $userphoto = '';
            if(count($getIfVehicleAvailable) > 0)
            {
                $vehicleNumber = $getIfVehicleAvailable[0]['rcNumber'];
                $getUserDetail = $this->db->query('select * from user where uid='.$getIfVehicleAvailable[0]['userId'])->result_array();
                $isAadharCorrect = 1;
                $isVisible = $getIfVehicleAvailable[0]['visibility'];
                $isVerified = 1;
                $isUserFound = 1;
                $personName = $getUserDetail[0]['aadharname'];
                $city = $getUserDetail[0]['vtc'];
                $state = $getUserDetail[0]['state'];
            }
            $getMissingVehicle = $this->db->query('select * from missingvehicle where rcNumber="'.$_POST['idNumber'].'" and isFound !=1')->result_array();
            if(count($getMissingVehicle) > 0)
            {
                $vehicleNumber = $getMissingVehicle[0]['rcNumber'];
                $getUserDetail = $this->db->query('select * from user where uid='.$getMissingVehicle[0]['userId'])->result_array();
                $isAadharCorrect = 1;
                $isMissing = 1;
                $city = $getUserDetail[0]['vtc'];
                $state = $getUserDetail[0]['state'];
                $personName = $getMissingVehicle[0]['ownerName'];
            }
            $insertdata = array(
                'personMob' => $_SESSION['loginmob'],
                'isRegistered' => 1,
                'isMissing' => $isMissing,
                'isPersonFound' => $isUserFound,
                'visibility' => $isVisible,
                'idNumber' => $_POST['idNumber'],
                'vehicleType' => $_POST['vehicleType'],
                'searchType' => $_POST['searchType'],
            );
            $insert = $this->db->insert('searchVehicle',$insertdata);
            if($insert)
            {
                if($isAadharCorrect == 1)
                {
                    $response = array(
                        'status' => 'success',
                        'personName' => $personName,
                        'vehicleNumber' => $vehicleNumber,
                        'city' => $city,
                        'state' => $state,
                        'isAadharCorrect' => $isAadharCorrect,
                        'message' => 'Vehicle Found',
                        'isVisible' => $isVisible,
                        'isMissing' => $isMissing,
                        'isVerified' => $isVerified,
                        'isRegistered' => $isUserFound,
                    );
                    echo json_encode($response);   
                    $_SESSION['vehicleLoggedInId'] = $this->db->insert_id();
                }else{
                    $response = array(
                        'status' => 'incorrect',
                        'isAadharCorrect' => $isAadharCorrect,
                    );
                    echo json_encode($response);   
                }
            }else{
                $response = array(
                    'status' => 'error',
                    'message' => 'Something Went Wrong'
                );
                echo json_encode($response);
            }
        }
        if($_POST['searchType'] == 'engineNumber')
        {
            $idNumber = $_POST['idNumber'];
            $getIfVehicleAvailable = $this->db->query('select * from vehicles where engine_number="'.$_POST['idNumber'].'" and isdeleted!=1 and paymentStatus=1')->result_array();
            $userphoto = '';
            if(count($getIfVehicleAvailable) > 0)
            {
                $vehicleNumber = $getIfVehicleAvailable[0]['rcNumber'];
                $getUserDetail = $this->db->query('select * from user where uid='.$getIfVehicleAvailable[0]['userId'])->result_array();
                $isAadharCorrect = 1;
                $isVisible = $getIfVehicleAvailable[0]['visibility'];
                $isVerified = 1;
                $isUserFound = 1;
                $personName = $getUserDetail[0]['aadharname'];
                $city = $getUserDetail[0]['vtc'];
                $state = $getUserDetail[0]['state'];
            }
            $getMissingVehicle = $this->db->query('select * from missingvehicle where engineNumber="'.$_POST['idNumber'].'" and isFound !=1')->result_array();
            if(count($getMissingVehicle) > 0)
            {
                $vehicleNumber = $getMissingVehicle[0]['rcNumber'];
                $getUserDetail = $this->db->query('select * from user where uid='.$getMissingVehicle[0]['userId'])->result_array();
                $isAadharCorrect = 1;
                $isMissing = 1;
                $personName = $getMissingVehicle[0]['ownerName'];
                $city = $getUserDetail[0]['vtc'];
                $state = $getUserDetail[0]['state'];
            }
            $insertdata = array(
                'personMob' => $_SESSION['loginmob'],
                'isRegistered' => 1,
                'isMissing' => $isMissing,
                'isPersonFound' => $isUserFound,
                'visibility' => $isVisible,
                'idNumber' => $_POST['idNumber'],
                'vehicleType' => $_POST['vehicleType'],
                'searchType' => $_POST['searchType'],
            );
            $insert = $this->db->insert('searchVehicle',$insertdata);
            if($insert)
            {
                if($isAadharCorrect == 1)
                {
                    $response = array(
                        'status' => 'success',
                        'personName' => $personName,
                        'city' => $city,
                        'state' => $state,
                        'vehicleNumber' => $vehicleNumber,
                        'isAadharCorrect' => $isAadharCorrect,
                        'message' => 'Vehicle Found',
                        'isVisible' => $isVisible,
                        'isMissing' => $isMissing,
                        'isVerified' => $isVerified,
                        'isRegistered' => $isUserFound,
                    );
                    echo json_encode($response);   
                    $_SESSION['vehicleLoggedInId'] = $this->db->insert_id();
                }else{
                    $response = array(
                        'status' => 'incorrect',
                        'isAadharCorrect' => $isAadharCorrect,
                    );
                    echo json_encode($response);   
                }
            }else{
                $response = array(
                    'status' => 'error',
                    'message' => 'Something Went Wrong'
                );
                echo json_encode($response);
            }
        }
        if($_POST['searchType'] == 'chassisNumber')
        {
            $idNumber = $_POST['idNumber'];
            $getIfVehicleAvailable = $this->db->query('select * from vehicles where chassis_number="'.$_POST['idNumber'].'" and isdeleted!=1 and paymentStatus=1')->result_array();
            $userphoto = '';
            if(count($getIfVehicleAvailable) > 0)
            {
                $vehicleNumber = $getIfVehicleAvailable[0]['rcNumber'];
                $getUserDetail = $this->db->query('select * from user where uid='.$getIfVehicleAvailable[0]['userId'])->result_array();
                $isAadharCorrect = 1;
                $isVisible = $getIfVehicleAvailable[0]['visibility'];
                $isVerified = 1;
                $isUserFound = 1;
                $personName = $getUserDetail[0]['aadharname'];
                $city = $getUserDetail[0]['vtc'];
                $state = $getUserDetail[0]['state'];
            }
            $getMissingVehicle = $this->db->query('select * from missingvehicle where chasisNumber="'.$_POST['idNumber'].'" and isFound !=1')->result_array();
            if(count($getMissingVehicle) > 0)
            {
                $vehicleNumber = $getMissingVehicle[0]['rcNumber'];
                $getUserDetail = $this->db->query('select * from user where uid='.$getMissingVehicle[0]['userId'])->result_array();
                $isAadharCorrect = 1;
                $isMissing = 1;
                $personName = $getMissingVehicle[0]['ownerName'];
                $city = $getUserDetail[0]['vtc'];
                $state = $getUserDetail[0]['state'];
            }
            $insertdata = array(
                'personMob' => $_SESSION['loginmob'],
                'isRegistered' => 1,
                'isMissing' => $isMissing,
                'isPersonFound' => $isUserFound,
                'visibility' => $isVisible,
                'idNumber' => $_POST['idNumber'],
                'vehicleType' => $_POST['vehicleType'],
                'searchType' => $_POST['searchType'],
            );
            $insert = $this->db->insert('searchVehicle',$insertdata);
            if($insert)
            {
                if($isAadharCorrect == 1)
                {
                    $response = array(
                        'status' => 'success',
                        'personName' => $personName,
                        'vehicleNumber' => $vehicleNumber,
                        'city' => $city,
                        'state' => $state,
                        'isAadharCorrect' => $isAadharCorrect,
                        'message' => 'Vehicle Found',
                        'isVisible' => $isVisible,
                        'isMissing' => $isMissing,
                        'isVerified' => $isVerified,
                        'isRegistered' => $isUserFound,
                    );
                    echo json_encode($response);   
                    $_SESSION['vehicleLoggedInId'] = $this->db->insert_id();
                }else{
                    $response = array(
                        'status' => 'incorrect',
                        'isAadharCorrect' => $isAadharCorrect,
                    );
                    echo json_encode($response);   
                }
            }else{
                $response = array(
                    'status' => 'error',
                    'message' => 'Something Went Wrong'
                );
                echo json_encode($response);
            }
        }
    }
    
    
     function search_person_details()
    {
      
        if($this->session->userdata('user_login') == 'yes'){
            $page_data['pn'] = 1;
            if(isset($_GET['pn']))
            {
                $page_data['pn'] = $_GET['pn'];    
            }
            $page_data['page_name'] = 'search_person_details';
            $this->load->view('police/index', $page_data);
        }else 
        {
            redirect('police/login','refresh');
        }
    }
    
    function checkPersonIdAfterLogin()
    {
        $personName = '';
        $gender = '';
        $aadhar = '';
        $gender = '';
        $isVerified = 'No';
        $isVisible = 0;
        $age = '';
        $isWanted = 0;
        $personId = '';
        $isCriminal = 0;
        $isLapata = 0;
        $address = '';
        $lapataId = 0;
        $wantedId = array();
        $criminalId = array();
        $isUserFound = 0;
        $isMissing = 0;
        $isAadharCorrect = 0;
        $idNumber = '';
        if($_POST['idType'] == 'aadhar')
        {
            $idNumber = $_POST['IdNumber'];
            if(strlen($_POST['IdNumber']) != 12)
            {
                $response = array(
                    'status' => 'error',
                    'message' => 'Aadhar number must be 12 digit number'
                );
                echo json_encode($response);
                return;
            }
            $getIfPersonAvailable = $this->db->query('select * from user where aadhar_id="'.$_POST['IdNumber'].'"')->result_array();
            $userphoto = '';
            if(count($getIfPersonAvailable) > 0)
            {
                $personId = $getIfPersonAvailable[0]['uid'];
                $isAadharCorrect = 1;
                $isVisible = $getIfPersonAvailable[0]['visibility'];
                $isVerified = 1;
                $isUserFound = 1;
                $personName = $getIfPersonAvailable[0]['aadharname'];
                $gender = $getIfPersonAvailable[0]['gender'];
                $aadhar = $getIfPersonAvailable[0]['aadhar_id'];
                $from=new DateTime(date('Y-m-d'));
                $to   = new DateTime($getIfPersonAvailable[0]['dob']);
                $age = ($from->diff($to)->y);
                $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                $userphoto = base_url().''.(($getIfPersonAvailable[0]['aadharphoto'] != NULL) ? $getIfPersonAvailable[0]['aadharphoto'] : $getIfPersonAvailable[0]['facematchphoto']);
            }
            $getIfWantedAvailable = $this->db->query('select * from criminals where aadharNumber="'.$_POST['IdNumber'].'" and isFinalSubmitted=1 and type="wanted" and status="Active" order by dateCreated desc')->result_array();
            if(count($getIfWantedAvailable) > 0)
            {
                $isAadharCorrect = 1;
                $isWanted = 1;
                $isVisible = 1;
                if($isUserFound != 1)
                {
                    $personName = $getIfWantedAvailable[0]['personName'];
                    $gender = $getIfWantedAvailable[0]['gender'];
                    $aadhar = $getIfWantedAvailable[0]['aadharNumber'];
                    if($getIfWantedAvailable[0]['dob'] != '0000-00-00')
                    {
                        $from=new DateTime(date('Y-m-d'));
                        $to   = new DateTime($getIfWantedAvailable[0]['dob']);
                        $age = ($from->diff($to)->y);
                    }else{
                        $age = '';
                    }
                    $address = '';
                    if($getIfWantedAvailable[0]['state'] != '')
                    {
                        $address .= $getIfWantedAvailable[0]['state'];
                    }
                    if($getIfWantedAvailable[0]['district'] != '')
                    {
                        if($address != '')
                        {
                            $address .= ' , '.$getIfWantedAvailable[0]['district'];
                        }else{
                            $address .= $getIfWantedAvailable[0]['district'];
                        }
                    }
                    if($getIfWantedAvailable[0]['city'] != '')
                    {
                        if($address != '')
                        {
                            $address .= ' , '.$getIfWantedAvailable[0]['city'];
                        }else{
                            $address .= $getIfWantedAvailable[0]['city'];
                        }
                    }
                    $getPhotos = $this->db->query('select * from criminalphotos where crimeId='.$getIfWantedAvailable[0]['Id'])->result_array();
                    if($userphoto == '' || $userphoto == base_url())
                    {
                        $userphoto = ((count($getPhotos) > 0) ? base_url().''.$getPhotos[0]['photourl'] : base_url().''.$getIfWantedAvailable[0]['photo']);   
                    }   
                }
                foreach($getIfWantedAvailable as $k=>$v)
                {
                    array_push($wantedId,$v['Id']);
                }
            }
            $getIfCriminalAvailable = $this->db->query('select * from criminals where aadharNumber="'.$_POST['IdNumber'].'" and isFinalSubmitted=1 and type="criminal" and status="Active" order by dateCreated desc')->result_array();
            if(count($getIfCriminalAvailable) > 0)
            {
                $isAadharCorrect = 1;
                $isVisible = 1;
                $isCriminal = 1;
                if($isUserFound != 1)
                {
                    $personName = $getIfCriminalAvailable[0]['personName'];
                    $gender = $getIfCriminalAvailable[0]['gender'];
                    $aadhar = $getIfCriminalAvailable[0]['aadharNumber'];
                    if($getIfCriminalAvailable[0]['dob'] != '0000-00-00')
                    {
                        $from=new DateTime(date('Y-m-d'));
                        $to   = new DateTime($getIfCriminalAvailable[0]['dob']);
                        $age = ($from->diff($to)->y);
                    }else{
                        $age = '';
                    }
                    $address = '';
                    if($getIfCriminalAvailable[0]['state'] != '')
                    {
                        $address .= $getIfCriminalAvailable[0]['state'];
                    }
                    if($getIfCriminalAvailable[0]['district'] != '')
                    {
                        if($address != '')
                        {
                            $address .= ' , '.$getIfCriminalAvailable[0]['district'];
                        }else{
                            $address .= $getIfCriminalAvailable[0]['district'];
                        }
                    }
                    if($getIfCriminalAvailable[0]['city'] != '')
                    {
                        if($address != '')
                        {
                            $address .= ' , '.$getIfCriminalAvailable[0]['city'];
                        }else{
                            $address .= $getIfCriminalAvailable[0]['city'];
                        }
                    }
                    $getPhotos = $this->db->query('select * from criminalphotos where crimeId='.$getIfCriminalAvailable[0]['Id'])->result_array();
                    if($userphoto == '' || $userphoto == base_url())
                    {
                        $userphoto = ((count($getPhotos) > 0) ? base_url().''.$getPhotos[0]['photourl'] : base_url().''.$getIfCriminalAvailable[0]['photo']);   
                    }
                }
                foreach($getIfCriminalAvailable as $k=>$v)
                {
                    array_push($criminalId,$v['Id']);
                }
            }
            $getMissingPerson = $this->db->query('select * from missingperson where missingaadhar="'.$_POST['IdNumber'].'" and isFound !=1 order by dateCreated desc')->result_array();
            if(count($getMissingPerson) > 0)
            {
                $isVisible = 1;
                $isAadharCorrect = 1;
                if($getMissingPerson[0]['missinggender'] != NULL)
                {
                    $isMissing = 1;
                    if($isUserFound != 1)
                    {
                        $personName = $getMissingPerson[0]['missingname'];
                        $gender = $getMissingPerson[0]['missinggender'];
                        $aadhar = $getMissingPerson[0]['missingaadhar'];
                        $from=new DateTime(date('Y-m-d'));
                        $to   = new DateTime($getMissingPerson[0]['missingdob']);
                        $age = ($from->diff($to)->y);
                        if(count($getIfPersonAvailable) > 0)
                        {
                            $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                        }else{
                            $address = $getMissingPerson[0]['fathercity'].','.$getMissingPerson[0]['fatherstate'];
                        }
                        if(count($getIfPersonAvailable) == 0)
                        {
                            if($userphoto == '' || $userphoto == base_url())
                            {
                                $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : '');
                            }
                        }
                    }
                }else{
                    $getFullDetail = $this->db->query('select * from missingpersondetail where missingId='.$getMissingPerson[0]['Id'])->result_array();
                    if(count($getFullDetail) > 0)
                    {
                        $isMissing = 1; 
                        if($isUserFound != 1)
                        {
                            $personName = $getMissingPerson[0]['missingname'];
                            $gender = $getMissingPerson[0]['missinggender'];
                            $aadhar = $getMissingPerson[0]['missingaadhar'];
                            $from=new DateTime(date('Y-m-d'));
                            $to   = new DateTime($getMissingPerson[0]['missingdob']);
                            $age = ($from->diff($to)->y);
                            if(count($getIfPersonAvailable) > 0)
                            {
                                $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                            }else{
                                $address = $getMissingPerson[0]['fathercity'].','.$getMissingPerson[0]['fatherstate'];
                            }
                            if(count($getIfPersonAvailable) == 0)
                            {
                                if($userphoto == '' || $userphoto == base_url())
                                {
                                    $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                                }
                            }
                        }
                    }else{
                        $getUserDetail = $this->db->query('select * from user where aadhar_id="'.$_POST['IdNumber'].'"')->result_array();
                        if(count($getUserDetail) > 0)
                        {
                            $isMissing = 1; 
                            if($isUserFound != 1)
                            {
                                $personName = $getUserDetail[0]['aadharname'];
                                $gender = $getUserDetail[0]['gender'];
                                $aadhar = $getUserDetail[0]['aadhar_id'];
                                $from=new DateTime(date('Y-m-d'));
                                $to   = new DateTime($getUserDetail[0]['dob']);
                                $age = ($from->diff($to)->y);
                                $address = $getUserDetail[0]['vtc'].','.$getUserDetail[0]['state'];
                                if(count($getIfPersonAvailable) == 0)
                                {
                                    if($userphoto == '' || $userphoto == base_url())
                                    {
                                        $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : '');
                                    }
                                }
                            }
                        }
                    }
                }
            }
            $getIfLapataAvailable = $this->db->query('select * from unknown_person where uploaded_by="user" and isFound=0 and aadharNumber="'.$_POST['IdNumber'].'" and expiryDate >= "'.date('Y-m-d h:i:s').'" order by dateCreated desc')->result_array();
            if(count($getIfLapataAvailable) > 0)
            {
                $isAadharCorrect = 1;
                $isVisible = 1;
                $isLapata = 1;
                $lapataId = $getIfLapataAvailable[0]['id'];
                $isMissing = 0;
                $missingId = 0;
                if(!$isUserFound)
                {
                    $isVerified = 0;
                    $personName = $getIfLapataAvailable[0]['person_name'];
                    $gender = ($getIfLapataAvailable[0]['Gender'] == 'boy' ? 'MALE' : 'FEMALE');
                    $aadhar = $getIfLapataAvailable[0]['aadharNumber'];
                    $age = ($getIfLapataAvailable[0]['Age']);
                    $address = $getIfLapataAvailable[0]['city'].','.$getIfLapataAvailable[0]['state'];
                    $userphoto = base_url().''.(($getIfLapataAvailable[0]['Photo'] != NULL) ? $getIfLapataAvailable[0]['Photo'] : $userphoto);
                }
            }
            if($this->getSettings('generalNotification') == 'true')
            {
                if($personId != '')
                {
                    $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='user' and userId=".$personId);
                    $query_res = $query->result_array();
                    
                    if(count($query_res) > 0)
                    {
                        foreach ($query_res as $query_res_data) {
                            $registrationIds[] =$query_res_data['token'];
                        }
                        
                        $url ="https://fcm.googleapis.com/fcm/send";
                        $fields=array(
                            "registration_ids"=>$registrationIds,
                            'data' => array("msg"=>"Khoji"),
                            'priority' => 'high',
                            "click_action"=>base_url(),
                            "notification"=>array(
                                "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - THANA -".$_SESSION['thanaName'].' has searched. Click here to check your notification.',
                                "title"=>"Khoji",
                            )   
                        );
                        $headers=array(
                            'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                            'Content-Type:application/json'
                        );
                        $ch=curl_init();
                        curl_setopt($ch,CURLOPT_URL,$url);
                        curl_setopt($ch,CURLOPT_POST,true);
                        curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                        curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                        curl_exec($ch);
                    }
                }   
            }
            if($isLapata != 1)
            {
                $getIfUnknownAvailable = $this->db->query('select * from unknown_person where uploaded_by !="user" and isFound=0 and aadharNumber="'.$_POST['IdNumber'].'" order by dateCreated desc')->result_array();
                if(count($getIfUnknownAvailable) > 0)
                {
                    $getApplicationNumber = $this->db->query('select * from unknown_person where id='.$getIfUnknownAvailable[0]['id'])->result_array();
                    $notifyData = array(
                        'isLogin' => 1,
                        'policeId' => $_SESSION['police_id'],
                        'dateCreated' => date('Y-m-d H:i:s'),
                        'mobileNumber' => $_SESSION['loginmob'],
                        'searchedAppNumber' => $getApplicationNumber[0]['Application_no'],
                        'searchType' => 'Unknown',
                        'complainantUserType' => $getApplicationNumber[0]['uploaded_by'],
                        'complainantUserId' => ($getApplicationNumber[0]['uploaded_by'] == 'police' ? $getApplicationNumber[0]['policeId'] : ($getApplicationNumber[0]['uploaded_by'] == 'ngo' ? $getApplicationNumber[0]['ngoId'] : $getApplicationNumber[0]['userId'])),
                        'isIdentity' => 1,
                        'identityType' => 'aadhar',
                        'identityNumber' => $_POST['IdNumber']
                    );
                    $insert = $this->db->insert('searchnotification',$notifyData);
                    if($getApplicationNumber[0]['uploaded_by'] == 'user')
                    {
                        $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='user' and userId=".$getApplicationNumber[0]['userId']);
                        $query_res = $query->result_array();
                        
                        if(count($query_res) > 0)
                        {
                            foreach ($query_res as $query_res_data) {
                                $registrationIds[] =$query_res_data['token'];
                            }
                            
                            $url ="https://fcm.googleapis.com/fcm/send";
                            $fields=array(
                                "registration_ids"=>$registrationIds,
                                'data' => array("msg"=>"Khoji"),
                                'priority' => 'high',
                                "click_action"=>base_url(),
                                "notification"=>array(
                                    "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - THANA -".$_SESSION['thanaName'].' has searched. Click here to check your notification.',
                                    "title"=>"Khoji",
                                )   
                            );
                            $headers=array(
                                'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                                'Content-Type:application/json'
                            );
                            $ch=curl_init();
                            curl_setopt($ch,CURLOPT_URL,$url);
                            curl_setopt($ch,CURLOPT_POST,true);
                            curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                            curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                            curl_exec($ch);
                        }
                    }else if($getApplicationNumber[0]['uploaded_by'] == 'police')
                    {
                        $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='police' and userId=".$getApplicationNumber[0]['policeId']);
                        $query_res = $query->result_array();
                        
                        if(count($query_res) > 0)
                        {
                            foreach ($query_res as $query_res_data) {
                                $registrationIds[] =$query_res_data['token'];
                            }
                            
                            $url ="https://fcm.googleapis.com/fcm/send";
                            $fields=array(
                                "registration_ids"=>$registrationIds,
                                'data' => array("msg"=>"Khoji"),
                                'priority' => 'high',
                                "click_action"=>base_url(),
                                "notification"=>array(
                                    "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - THANA -".$_SESSION['thanaName'].' has searched. Click here to check your notification.',
                                    "title"=>"Khoji",
                                )   
                            );
                            $headers=array(
                                'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                                'Content-Type:application/json'
                            );
                            $ch=curl_init();
                            curl_setopt($ch,CURLOPT_URL,$url);
                            curl_setopt($ch,CURLOPT_POST,true);
                            curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                            curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                            curl_exec($ch);
                        }
                    }else{
                        $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='ngo' and userId=".$getApplicationNumber[0]['ngoId']);
                        $query_res = $query->result_array();
                        
                        if(count($query_res) > 0)
                        {
                            foreach ($query_res as $query_res_data) {
                                $registrationIds[] =$query_res_data['token'];
                            }
                            
                            $url ="https://fcm.googleapis.com/fcm/send";
                            $fields=array(
                                "registration_ids"=>$registrationIds,
                                'data' => array("msg"=>"Khoji"),
                                'priority' => 'high',
                                "click_action"=>base_url(),
                                "notification"=>array(
                                    "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - THANA -".$_SESSION['thanaName'].' has searched. Click here to check your notification.',
                                    "title"=>"Khoji",
                                )   
                            );
                            $headers=array(
                                'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                                'Content-Type:application/json'
                            );
                            $ch=curl_init();
                            curl_setopt($ch,CURLOPT_URL,$url);
                            curl_setopt($ch,CURLOPT_POST,true);
                            curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                            curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                            curl_exec($ch);
                        }
                    }
                    if($isUserFound != 1)
                    {
                        if($getIfUnknownAvailable[0]['uploaded_by'] == 'police')
                        {
                            $getPoliceDetail = $this->db->query('select * from police where police_id='.$getIfUnknownAvailable[0]['policeId'])->result_array();
                            $finalresponse = array(
                                'isUserFound' => $isUserFound,
                                'status' => 'unknown',
                                'isLapata' => $isLapata,
                                'personName' => strtoupper($getIfUnknownAvailable[0]['person_name']),
                                'aadharNumber' => substr_replace((($getIfUnknownAvailable[0]['aadharNumber'] != '') ? $getIfUnknownAvailable[0]['aadharNumber'] : $aadhar),'xxxxxxxx',0,8),
                                'type' => 'police',
                                'date' => date('d-m-Y h:i A',strtotime($getIfUnknownAvailable[0]['dateCreated'])),
                                'address' => strtoupper($getPoliceDetail[0]['thanaName'].' - '.$getPoliceDetail[0]['state'].', '.$getPoliceDetail[0]['district']),
                                'photo' => base_url().''.$getIfUnknownAvailable[0]['Photo'],
                                'age' => $getIfUnknownAvailable[0]['Age'],
                                'gender' => ($getIfUnknownAvailable[0]['Gender'] == 'boy' ? 'Male' : 'Female'),
                                'id' => $getIfUnknownAvailable[0]['Application_no'],
                                'registration_mobile' => (($getPoliceDetail[0]['registration_mobile'] != NULL) ? $getPoliceDetail[0]['registration_mobile'] : ''),
                                'mobile1' => (($getIfUnknownAvailable[0]['well1'] != NULL) ? $getIfUnknownAvailable[0]['well1'] : ''),
                                'mobile2' => (($getIfUnknownAvailable[0]['well2'] != NULL) ? $getIfUnknownAvailable[0]['well2'] : ''),
                                'mobile3' => (($getIfUnknownAvailable[0]['well3'] != NULL) ? $getIfUnknownAvailable[0]['well3'] : ''),
                            );   
                        }else{
                            $getNgoDetail = $this->db->query('select * from ngo where Id='.$getIfUnknownAvailable[0]['ngoId'])->result_array();
                            $finalresponse = array(
                                'isUserFound' => $isUserFound,
                                'status' => 'unknown',
                                'isLapata' => $isLapata,
                                'personName' => strtoupper($getIfUnknownAvailable[0]['person_name']),
                                'aadharNumber' => substr_replace((($getIfUnknownAvailable[0]['aadharNumber'] != '') ? $getIfUnknownAvailable[0]['aadharNumber'] : $aadhar),'xxxxxxxx',0,8),
                                'type' => 'ngo',
                                'date' => date('d-m-Y h:i A',strtotime($getIfUnknownAvailable[0]['dateCreated'])),
                                'address' => strtoupper($getNgoDetail[0]['ngoName'].' - '.$getNgoDetail[0]['ngoState'].', '.$getNgoDetail[0]['ngoDistrict'].', '.$getNgoDetail[0]['ngoCity']),
                                'photo' => base_url().''.$getIfUnknownAvailable[0]['Photo'],
                                'age' => $getIfUnknownAvailable[0]['Age'],
                                'gender' => ($getIfUnknownAvailable[0]['Gender'] == 'boy' ? 'Male' : 'Female'),
                                'registration_mobile' => (($getNgoDetail[0]['ngoRegistrationNumber'] != NULL) ? $getNgoDetail[0]['ngoRegistrationNumber'] : ''),
                                'mobile1' => (($getIfUnknownAvailable[0]['well1'] != NULL) ? $getIfUnknownAvailable[0]['well1'] : ''),
                                'mobile2' => (($getIfUnknownAvailable[0]['well2'] != NULL) ? $getIfUnknownAvailable[0]['well2'] : ''),
                                'mobile3' => (($getIfUnknownAvailable[0]['well3'] != NULL) ? $getIfUnknownAvailable[0]['well3'] : ''),
                                'id' => $getIfUnknownAvailable[0]['Application_no']
                            );   
                        }
                    }else{
                        $finalresponse = array(
                            'isUserFound' => $isUserFound,
                            'status' => 'unknown',
                            'isLapata' => $isLapata,
                            'personName' => strtoupper($personName),
                            'aadharNumber' => substr_replace((($getIfUnknownAvailable[0]['aadharNumber'] != '') ? $getIfUnknownAvailable[0]['aadharNumber'] : $aadhar),'xxxxxxxx',0,8),
                            'address' => strtoupper($address),
                            'photo' => ($userphoto != '' ? $userphoto : base_url().$getIfUnknownAvailable[0]['Photo']),
                            'age' => $age,
                            'gender' => strtolower($gender),
                            'id' => $getIfUnknownAvailable[0]['Application_no']
                        );
                    }
                    $insertdata = array(
                        'lapataId' => $lapataId,
                        'isLapata' => $isLapata,
                        'wantedIds' => implode(',',$wantedId),
                        'criminalIds' => implode(',',$criminalId),
                        'Idtype' => $_POST['idType'],
                        'IdNumber' => $idNumber,
                        'userId' => $_SESSION['user_id'],
                        'isFound' => $isUserFound,
                        'isMissing' => $isMissing,
                        'missingId' => implode(',',$missingId),
                        'personId' => $personId
                    );
                    $insert = $this->db->insert('searchpersonhistory',$insertdata);
                    $_SESSION['searchId'] = $this->db->insert_id();
                    echo json_encode($finalresponse);
                }else{
                    $insertdata = array(
                        'lapataId' => $lapataId,
                        'isLapata' => $isLapata,
                        'wantedIds' => implode(',',$wantedId),
                        'criminalIds' => implode(',',$criminalId),
                        'Idtype' => $_POST['idType'],
                        'IdNumber' => $idNumber,
                        'userId' => $_SESSION['user_id'],
                        'isFound' => $isUserFound,
                        'isMissing' => $isMissing,
                        'missingId' => implode(',',$missingId),
                        'personId' => $personId
                    );
                    $insert = $this->db->insert('searchpersonhistory',$insertdata);
                    if($insert)
                    {
                        if($isAadharCorrect == 1)
                        {
                            $_SESSION['searchId'] = $this->db->insert_id();
                            $isOnlyUser = 0;
                            if(!$isWanted && !$isLapata && !$isCriminal && !$isMissing)
                            {
                                $isOnlyUser = 1;
                            }
                            $response = array(
                                'personId' => $personId,
                                'isOnlyUser' => $isOnlyUser,
                                'status' => 'success',
                                'personName' => $personName,
                                'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                                'gender' => strtolower($gender),
                                'isWanted' => $isWanted,
                                'isLapata' => $isLapata,
                                'isCriminal' => $isCriminal,
                                'age' => $age,
                                'address' => $address,
                                'isAadharCorrect' => $isAadharCorrect,
                                'isDobCorrect' => 1,
                                'isGenderCorrect' => 1,
                                'message' => 'Person Found',
                                'isVisible' => $isVisible,
                                'isMissing' => $isMissing,
                                'isVerified' => $isVerified,
                                'isRegistered' => $isUserFound,
                                'image' => ($userphoto != '' ? $userphoto : base_url().'assets/img/noimage.jpg')
                            );
                            echo json_encode($response);   
                        }else{
                            $response = array(
                                'status' => 'incorrect',
                                'isAadharCorrect' => $isAadharCorrect,
                                'isDobCorrect' => 1,
                                'isGenderCorrect' => 1,
                            );
                            echo json_encode($response);   
                        }
                    }else{
                        $response = array(
                            'status' => 'error',
                            'message' => 'Something Went Wrong'
                        );
                        echo json_encode($response);
                    }
                }   
            }else{
                $getApplicationNumber = $this->db->query('select * from unknown_person where id='.$lapataId)->result_array();
                $notifyData = array(
                    'isLogin' => 1,
                    'policeId' => $_SESSION['police_id'],
                    'dateCreated' => date('Y-m-d H:i:s'),
                    'mobileNumber' => $_SESSION['loginmob'],
                    'searchedAppNumber' => $getApplicationNumber[0]['Application_no'],
                    'searchType' => 'Lapata',
                    'complainantUserType' => $getApplicationNumber[0]['uploaded_by'],
                    'complainantUserId' => ($getApplicationNumber[0]['uploaded_by'] == 'police' ? $getApplicationNumber[0]['policeId'] : ($getApplicationNumber[0]['uploaded_by'] == 'ngo' ? $getApplicationNumber[0]['ngoId'] : $getApplicationNumber[0]['userId'])),
                    'isIdentity' => 1,
                    'identityType' => 'aadhar',
                    'identityNumber' => $_POST['IdNumber']
                );
                $insert = $this->db->insert('searchnotification',$notifyData);
                if($getApplicationNumber[0]['uploaded_by'] == 'user')
                {
                    $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='user' and userId=".$getApplicationNumber[0]['userId']);
                    $query_res = $query->result_array();
                    
                    if(count($query_res) > 0)
                    {
                        foreach ($query_res as $query_res_data) {
                            $registrationIds[] =$query_res_data['token'];
                        }
                        
                        $url ="https://fcm.googleapis.com/fcm/send";
                        $fields=array(
                            "registration_ids"=>$registrationIds,
                            'data' => array("msg"=>"Khoji"),
                            'priority' => 'high',
                            "click_action"=>base_url(),
                            "notification"=>array(
                                "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - THANA -".$_SESSION['thanaName'].' has searched. Click here to check your notification.',
                                "title"=>"Khoji",
                            )   
                        );
                        $headers=array(
                            'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                            'Content-Type:application/json'
                        );
                        $ch=curl_init();
                        curl_setopt($ch,CURLOPT_URL,$url);
                        curl_setopt($ch,CURLOPT_POST,true);
                        curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                        curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                        curl_exec($ch);
                    }
                }else if($getApplicationNumber[0]['uploaded_by'] == 'police')
                {
                    $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='police' and userId=".$getApplicationNumber[0]['policeId']);
                    $query_res = $query->result_array();
                    
                    if(count($query_res) > 0)
                    {
                        foreach ($query_res as $query_res_data) {
                            $registrationIds[] =$query_res_data['token'];
                        }
                        
                        $url ="https://fcm.googleapis.com/fcm/send";
                        $fields=array(
                            "registration_ids"=>$registrationIds,
                            'data' => array("msg"=>"Khoji"),
                            'priority' => 'high',
                            "click_action"=>base_url(),
                            "notification"=>array(
                                "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - THANA -".$_SESSION['thanaName'].' has searched. Click here to check your notification.',
                                "title"=>"Khoji",
                            )   
                        );
                        $headers=array(
                            'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                            'Content-Type:application/json'
                        );
                        $ch=curl_init();
                        curl_setopt($ch,CURLOPT_URL,$url);
                        curl_setopt($ch,CURLOPT_POST,true);
                        curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                        curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                        curl_exec($ch);
                    }
                }else{
                    $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='ngo' and userId=".$getApplicationNumber[0]['ngoId']);
                    $query_res = $query->result_array();
                    
                    if(count($query_res) > 0)
                    {
                        foreach ($query_res as $query_res_data) {
                            $registrationIds[] =$query_res_data['token'];
                        }
                        
                        $url ="https://fcm.googleapis.com/fcm/send";
                        $fields=array(
                            "registration_ids"=>$registrationIds,
                            'data' => array("msg"=>"Khoji"),
                            'priority' => 'high',
                            "click_action"=>base_url(),
                            "notification"=>array(
                                "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - THANA -".$_SESSION['thanaName'].' has searched. Click here to check your notification.',
                                "title"=>"Khoji",
                            )   
                        );
                        $headers=array(
                            'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                            'Content-Type:application/json'
                        );
                        $ch=curl_init();
                        curl_setopt($ch,CURLOPT_URL,$url);
                        curl_setopt($ch,CURLOPT_POST,true);
                        curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                        curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                        curl_exec($ch);
                    }
                }
                $insertdata = array(
                    'lapataId' => $lapataId,
                    'isLapata' => $isLapata,
                    'wantedIds' => implode(',',$wantedId),
                    'criminalIds' => implode(',',$criminalId),
                    'Idtype' => $_POST['idType'],
                    'IdNumber' => $idNumber,
                    'userId' => $_SESSION['user_id'],
                    'isFound' => $isUserFound,
                    'isMissing' => $isMissing,
                    'missingId' => implode(',',$missingId),
                    'personId' => $personId
                );
                $insert = $this->db->insert('searchpersonhistory',$insertdata);
                if($insert)
                {
                    if($isAadharCorrect == 1)
                    {
                        $_SESSION['searchId'] = $this->db->insert_id();
                        $isOnlyUser = 0;
                        if(!$isWanted && !$isLapata && !$isCriminal && !$isMissing)
                        {
                            $isOnlyUser = 1;
                        }
                        $response = array(
                            'personId' => $personId,
                            'isOnlyUser' => $isOnlyUser,
                            'status' => 'success',
                            'personName' => $personName,
                            'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                            'gender' => strtolower($gender),
                            'isWanted' => $isWanted,
                            'isLapata' => $isLapata,
                            'isCriminal' => $isCriminal,
                            'age' => $age,
                            'address' => $address,
                            'isAadharCorrect' => $isAadharCorrect,
                            'isDobCorrect' => 1,
                            'isGenderCorrect' => 1,
                            'message' => 'Person Found',
                            'isVisible' => $isVisible,
                            'isMissing' => $isMissing,
                            'isVerified' => $isVerified,
                            'isRegistered' => $isUserFound,
                            'image' => ($userphoto != '' ? $userphoto : base_url().'assets/img/noimage.jpg')
                        );
                        echo json_encode($response);   
                    }else{
                        $response = array(
                            'status' => 'incorrect',
                            'isAadharCorrect' => $isAadharCorrect,
                            'isDobCorrect' => 1,
                            'isGenderCorrect' => 1,
                        );
                        echo json_encode($response);   
                    }
                }else{
                    $response = array(
                        'status' => 'error',
                        'message' => 'Something Went Wrong'
                    );
                    echo json_encode($response);
                }   
            }
        }
        if($_POST['idType'] == 'dl')
        {
            $idNumber = $_POST['IdNumber'];
            $getIfAlready = $this->db->query('select * from dllist where dlNumber="'.$idNumber.'"')->result_array();
            if(count($getIfAlready) > 0)
            {
                $getIfPersonAvailable = $this->db->query('select * from user where uid='.$getIfAlready[0]['userId'])->result_array();   
            }else{
                $getIfPersonAvailable = array();
            }
            $userphoto = '';
            if(count($getIfPersonAvailable) > 0)
            {
                $personId = $getIfPersonAvailable[0]['uid'];
                $isAadharCorrect = 1;
                $isVisible = $getIfPersonAvailable[0]['visibility'];
                $isVerified = 1;
                $isUserFound = 1;
                $personName = $getIfPersonAvailable[0]['aadharname'];
                $gender = $getIfPersonAvailable[0]['gender'];
                $aadhar = $getIfPersonAvailable[0]['aadhar_id'];
                $from=new DateTime(date('Y-m-d'));
                $to   = new DateTime($getIfPersonAvailable[0]['dob']);
                $age = ($from->diff($to)->y);
                $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                $userphoto = base_url().''.(($getIfPersonAvailable[0]['aadharphoto'] != NULL) ? $getIfPersonAvailable[0]['aadharphoto'] : $getIfPersonAvailable[0]['facematchphoto']);
            }
            if(count($getIfPersonAvailable) > 0)
            {
                $getIfWantedAvailable = $this->db->query('select * from criminals where aadharNumber="'.$getIfPersonAvailable[0]['aadhar_id'].'" and isFinalSubmitted=1 and type="wanted" and status="Active"')->result_array();   
            }else{
                $getIfWantedAvailable = array();
            }
            if(count($getIfWantedAvailable) > 0)
            {
                $isVisible = 1;
                $isAadharCorrect = 1;
                $isWanted = 1;
                if($isUserFound != 1)
                {
                    $personName = $getIfWantedAvailable[0]['personName'];
                    $gender = $getIfWantedAvailable[0]['gender'];
                    $aadhar = $getIfWantedAvailable[0]['aadharNumber'];
                    if($getIfWantedAvailable[0]['dob'] != '0000-00-00')
                    {
                        $from=new DateTime(date('Y-m-d'));
                        $to   = new DateTime($getIfWantedAvailable[0]['dob']);
                        $age = ($from->diff($to)->y);
                    }else{
                        $age = '';
                    }
                    $address = '';
                    if($getIfWantedAvailable[0]['state'] != '')
                    {
                        $address .= $getIfWantedAvailable[0]['state'];
                    }
                    if($getIfWantedAvailable[0]['district'] != '')
                    {
                        if($address != '')
                        {
                            $address .= ' , '.$getIfWantedAvailable[0]['district'];
                        }else{
                            $address .= $getIfWantedAvailable[0]['district'];
                        }
                    }
                    if($getIfWantedAvailable[0]['city'] != '')
                    {
                        if($address != '')
                        {
                            $address .= ' , '.$getIfWantedAvailable[0]['city'];
                        }else{
                            $address .= $getIfWantedAvailable[0]['city'];
                        }
                    }
                    $getPhotos = $this->db->query('select * from criminalphotos where crimeId='.$getIfWantedAvailable[0]['Id'])->result_array();
                    if($userphoto == '' || $userphoto == base_url())
                    {
                        $userphoto = ((count($getPhotos) > 0) ? base_url().''.$getPhotos[0]['photourl'] : base_url().''.$getIfWantedAvailable[0]['photo']);   
                    }
                }
                foreach($getIfWantedAvailable as $k=>$v)
                {
                    array_push($wantedId,$v['Id']);
                }
            }
            if(count($getIfPersonAvailable) > 0)
            {
                $getIfCriminalAvailable = $this->db->query('select * from criminals where aadharNumber="'.$getIfPersonAvailable[0]['aadhar_id'].'" and isFinalSubmitted=1 and type="criminal" and status="Active"')->result_array();   
            }else{
                $getIfCriminalAvailable = array();
            }
            if(count($getIfCriminalAvailable) > 0)
            {
                $isVisible = 1;
                $isAadharCorrect = 1;
                $isCriminal = 1;
                if($isUserFound != 1)
                {
                    $personName = $getIfCriminalAvailable[0]['personName'];
                    $gender = $getIfCriminalAvailable[0]['gender'];
                    $aadhar = $getIfCriminalAvailable[0]['aadharNumber'];
                    if($getIfCriminalAvailable[0]['dob'] != '0000-00-00')
                    {
                        $from=new DateTime(date('Y-m-d'));
                        $to   = new DateTime($getIfCriminalAvailable[0]['dob']);
                        $age = ($from->diff($to)->y);
                    }else{
                        $age = '';
                    }
                    $address = '';
                    if($getIfCriminalAvailable[0]['state'] != '')
                    {
                        $address .= $getIfCriminalAvailable[0]['state'];
                    }
                    if($getIfCriminalAvailable[0]['district'] != '')
                    {
                        if($address != '')
                        {
                            $address .= ' , '.$getIfCriminalAvailable[0]['district'];
                        }else{
                            $address .= $getIfCriminalAvailable[0]['district'];
                        }
                    }
                    if($getIfCriminalAvailable[0]['city'] != '')
                    {
                        if($address != '')
                        {
                            $address .= ' , '.$getIfCriminalAvailable[0]['city'];
                        }else{
                            $address .= $getIfCriminalAvailable[0]['city'];
                        }
                    }
                    $getPhotos = $this->db->query('select * from criminalphotos where crimeId='.$getIfCriminalAvailable[0]['Id'])->result_array();
                    if($userphoto == '' || $userphoto == base_url())
                    {
                        $userphoto = ((count($getPhotos) > 0) ? base_url().''.$getPhotos[0]['photourl'] : base_url().''.$getIfCriminalAvailable[0]['photo']);   
                    }
                }
                foreach($getIfCriminalAvailable as $k=>$v)
                {
                    array_push($criminalId,$v['Id']);
                }
            }
            if(count($getIfPersonAvailable) > 0)
            {
                $getMissingPerson = $this->db->query('select * from missingperson where missingaadhar="'.$getIfPersonAvailable[0]['aadhar_id'].'" and isFound != 1')->result_array();   
            }else{
                $getMissingPerson = array();
            }
            if(count($getMissingPerson) > 0)
            {
                $isVisible = 1;
                $isAadharCorrect = 1;
                if($getMissingPerson[0]['missinggender'] != NULL)
                {
                    $isMissing = 1;
                    if($isUserFound != 1)
                    {
                        $personName = $getMissingPerson[0]['missingname'];
                        $gender = $getMissingPerson[0]['missinggender'];
                        $aadhar = $getMissingPerson[0]['missingaadhar'];
                        $from=new DateTime(date('Y-m-d'));
                        $to   = new DateTime($getMissingPerson[0]['missingdob']);
                        $age = ($from->diff($to)->y);
                        if(count($getIfPersonAvailable) > 0)
                        {
                            $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                        }else{
                            $address = $getMissingPerson[0]['fathercity'].','.$getMissingPerson[0]['fatherstate'];
                        }
                        if(count($getIfPersonAvailable) == 0)
                        {
                            if($userphoto == '' || $userphoto == base_url())
                            {
                                $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : '');
                            }
                        }
                    }
                }else{
                    $getFullDetail = $this->db->query('select * from missingpersondetail where missingId='.$getMissingPerson[0]['Id'])->result_array();
                    if(count($getFullDetail) > 0)
                    {
                        $isMissing = 1; 
                        if($isUserFound != 1)
                        {
                            $personName = $getMissingPerson[0]['missingname'];
                            $gender = $getMissingPerson[0]['missinggender'];
                            $aadhar = $getMissingPerson[0]['missingaadhar'];
                            $from=new DateTime(date('Y-m-d'));
                            $to   = new DateTime($getMissingPerson[0]['missingdob']);
                            $age = ($from->diff($to)->y);
                            if(count($getIfPersonAvailable) > 0)
                            {
                                $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                            }else{
                                $address = $getMissingPerson[0]['fathercity'].','.$getMissingPerson[0]['fatherstate'];
                            }
                            if(count($getIfPersonAvailable) == 0)
                            {
                                if($userphoto == '' || $userphoto == base_url())
                                {
                                    $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : '');
                                }
                            }
                        }
                    }else{
                        $getUserDetail = $this->db->query('select * from user where aadhar_id="'.$getIfPersonAvailable[0]['aadhar_id'].'"')->result_array();
                        if(count($getUserDetail) > 0)
                        {
                            $isMissing = 1; 
                            if($isUserFound != 1)
                            {
                                $personName = $getUserDetail[0]['aadharname'];
                                $gender = $getUserDetail[0]['gender'];
                                $aadhar = $getUserDetail[0]['aadhar_id'];
                                $from=new DateTime(date('Y-m-d'));
                                $to   = new DateTime($getUserDetail[0]['dob']);
                                $age = ($from->diff($to)->y);
                                $address = $getUserDetail[0]['vtc'].','.$getUserDetail[0]['state'];
                                if(count($getIfPersonAvailable) == 0)
                                {
                                    if($userphoto == '' || $userphoto == base_url())
                                    {
                                        $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : '');
                                    }
                                }
                            }
                        }
                    }
                }
            }
            $getIfLapataAvailable = $this->db->query('select * from unknown_person where uploaded_by="user" and isFound=0 and DL_no="'.$_POST['IdNumber'].'" and expiryDate >= "'.date('Y-m-d h:i:s').'"')->result_array();
            if(count($getIfLapataAvailable) > 0)
            {
                $isAadharCorrect = 1;
                $isVisible = 1;
                $isLapata = 1;
                $lapataId = $getIfLapataAvailable[0]['id'];
                $isMissing = 0;
                $missingId = 0;
                if(!$isUserFound)
                {
                    $isVerified = 0;
                    $personName = $getIfLapataAvailable[0]['person_name'];
                    $gender = ($getIfLapataAvailable[0]['Gender'] == 'boy' ? 'MALE' : 'FEMALE');
                    $aadhar = $getIfLapataAvailable[0]['aadharNumber'];
                    $age = ($getIfLapataAvailable[0]['Age']);
                    $address = $getIfLapataAvailable[0]['city'].','.$getIfLapataAvailable[0]['state'];
                    $userphoto = base_url().''.(($getIfLapataAvailable[0]['Photo'] != NULL) ? $getIfLapataAvailable[0]['Photo'] : $userphoto);
                }
            }
            if($this->getSettings('generalNotification') == 'true')
            {
                if($personId != '')
                {
                    $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='user' and userId=".$personId);
                    $query_res = $query->result_array();
                    
                    if(count($query_res) > 0)
                    {
                        foreach ($query_res as $query_res_data) {
                            $registrationIds[] =$query_res_data['token'];
                        }
                        
                        $url ="https://fcm.googleapis.com/fcm/send";
                        $fields=array(
                            "registration_ids"=>$registrationIds,
                            'data' => array("msg"=>"Khoji"),
                            'priority' => 'high',
                            "click_action"=>base_url(),
                            "notification"=>array(
                                "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - THANA -".$_SESSION['thanaName'].' has searched. Click here to check your notification.',
                                "title"=>"Khoji",
                            )   
                        );
                        $headers=array(
                            'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                            'Content-Type:application/json'
                        );
                        $ch=curl_init();
                        curl_setopt($ch,CURLOPT_URL,$url);
                        curl_setopt($ch,CURLOPT_POST,true);
                        curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                        curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                        curl_exec($ch);
                    }
                }   
            }
            if($isLapata != 1)
            {
                $getIfUnknownAvailable = $this->db->query('select * from unknown_person where uploaded_by !="user" and isFound=0 and DL_no="'.$_POST['IdNumber'].'" order by id desc')->result_array();
                if(count($getIfUnknownAvailable) > 0)
                {
                    $getApplicationNumber = $this->db->query('select * from unknown_person where id='.$getIfUnknownAvailable[0]['id'])->result_array();
                    $notifyData = array(
                        'isLogin' => 1,
                        'policeId' => $_SESSION['police_id'],
                        'dateCreated' => date('Y-m-d H:i:s'),
                        'mobileNumber' => $_SESSION['loginmob'],
                        'searchedAppNumber' => $getApplicationNumber[0]['Application_no'],
                        'searchType' => 'Lapata',
                        'complainantUserType' => $getApplicationNumber[0]['uploaded_by'],
                        'complainantUserId' => ($getApplicationNumber[0]['uploaded_by'] == 'police' ? $getApplicationNumber[0]['policeId'] : ($getApplicationNumber[0]['uploaded_by'] == 'ngo' ? $getApplicationNumber[0]['ngoId'] : $getApplicationNumber[0]['userId'])),
                        'isIdentity' => 1,
                        'identityType' => 'dl',
                        'identityNumber' => $_POST['IdNumber']
                    );
                    $insert = $this->db->insert('searchnotification',$notifyData);
                    if($getApplicationNumber[0]['uploaded_by'] == 'user')
                    {
                        $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='user' and userId=".$getApplicationNumber[0]['userId']);
                        $query_res = $query->result_array();
                        
                        if(count($query_res) > 0)
                        {
                            foreach ($query_res as $query_res_data) {
                                $registrationIds[] =$query_res_data['token'];
                            }
                            
                            $url ="https://fcm.googleapis.com/fcm/send";
                            $fields=array(
                                "registration_ids"=>$registrationIds,
                                'data' => array("msg"=>"Khoji"),
                                'priority' => 'high',
                                "click_action"=>base_url(),
                                "notification"=>array(
                                    "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - THANA -".$_SESSION['thanaName'].' has searched. Click here to check your notification.',
                                    "title"=>"Khoji",
                                )   
                            );
                            $headers=array(
                                'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                                'Content-Type:application/json'
                            );
                            $ch=curl_init();
                            curl_setopt($ch,CURLOPT_URL,$url);
                            curl_setopt($ch,CURLOPT_POST,true);
                            curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                            curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                            curl_exec($ch);
                        }
                    }else if($getApplicationNumber[0]['uploaded_by'] == 'police')
                    {
                        $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='police' and userId=".$getApplicationNumber[0]['policeId']);
                        $query_res = $query->result_array();
                        
                        if(count($query_res) > 0)
                        {
                            foreach ($query_res as $query_res_data) {
                                $registrationIds[] =$query_res_data['token'];
                            }
                            
                            $url ="https://fcm.googleapis.com/fcm/send";
                            $fields=array(
                                "registration_ids"=>$registrationIds,
                                'data' => array("msg"=>"Khoji"),
                                'priority' => 'high',
                                "click_action"=>base_url(),
                                "notification"=>array(
                                    "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - THANA -".$_SESSION['thanaName'].' has searched. Click here to check your notification.',
                                    "title"=>"Khoji",
                                )   
                            );
                            $headers=array(
                                'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                                'Content-Type:application/json'
                            );
                            $ch=curl_init();
                            curl_setopt($ch,CURLOPT_URL,$url);
                            curl_setopt($ch,CURLOPT_POST,true);
                            curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                            curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                            curl_exec($ch);
                        }
                    }else{
                        $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='ngo' and userId=".$getApplicationNumber[0]['ngoId']);
                        $query_res = $query->result_array();
                        
                        if(count($query_res) > 0)
                        {
                            foreach ($query_res as $query_res_data) {
                                $registrationIds[] =$query_res_data['token'];
                            }
                            
                            $url ="https://fcm.googleapis.com/fcm/send";
                            $fields=array(
                                "registration_ids"=>$registrationIds,
                                'data' => array("msg"=>"Khoji"),
                                'priority' => 'high',
                                "click_action"=>base_url(),
                                "notification"=>array(
                                    "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - THANA -".$_SESSION['thanaName'].' has searched. Click here to check your notification.',
                                    "title"=>"Khoji",
                                )   
                            );
                            $headers=array(
                                'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                                'Content-Type:application/json'
                            );
                            $ch=curl_init();
                            curl_setopt($ch,CURLOPT_URL,$url);
                            curl_setopt($ch,CURLOPT_POST,true);
                            curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                            curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                            curl_exec($ch);
                        }
                    }
                    if($isUserFound != 1)
                    {
                        if($getIfUnknownAvailable[0]['uploaded_by'] == 'police')
                        {
                            $getPoliceDetail = $this->db->query('select * from police where police_id='.$getIfUnknownAvailable[0]['policeId'])->result_array();
                            $finalresponse = array(
                                'isUserFound' => $isUserFound,
                                'status' => 'unknown',
                                'isLapata' => $isLapata,
                                'personName' => strtoupper($getIfUnknownAvailable[0]['person_name']),
                                'aadharNumber' => substr_replace((($getIfUnknownAvailable[0]['aadharNumber'] != '') ? $getIfUnknownAvailable[0]['aadharNumber'] : $aadhar),'xxxxxxxx',0,8),
                                'type' => 'police',
                                'date' => date('d-m-Y h:i A',strtotime($getIfUnknownAvailable[0]['dateCreated'])),
                                'address' => strtoupper($getPoliceDetail[0]['thanaName'].' - '.$getPoliceDetail[0]['state'].', '.$getPoliceDetail[0]['district']),
                                'photo' => base_url().''.$getIfUnknownAvailable[0]['Photo'],
                                'age' => $getIfUnknownAvailable[0]['Age'],
                                'gender' => ($getIfUnknownAvailable[0]['Gender'] == 'boy' ? 'Male' : 'Female'),
                                'id' => $getIfUnknownAvailable[0]['Application_no'],
                                'registration_mobile' => (($getPoliceDetail[0]['registration_mobile'] != NULL) ? $getPoliceDetail[0]['registration_mobile'] : ''),
                                'mobile1' => (($getIfUnknownAvailable[0]['well1'] != NULL) ? $getIfUnknownAvailable[0]['well1'] : ''),
                                'mobile2' => (($getIfUnknownAvailable[0]['well2'] != NULL) ? $getIfUnknownAvailable[0]['well2'] : ''),
                                'mobile3' => (($getIfUnknownAvailable[0]['well3'] != NULL) ? $getIfUnknownAvailable[0]['well3'] : ''),
                            );   
                        }else{
                            $getNgoDetail = $this->db->query('select * from ngo where Id='.$getIfUnknownAvailable[0]['ngoId'])->result_array();
                            $finalresponse = array(
                                'status' => 'unknown',
                                'isUserFound' => $isUserFound,
                                'isLapata' => $isLapata,
                                'personName' => strtoupper($getIfUnknownAvailable[0]['person_name']),
                                'aadharNumber' => substr_replace((($getIfUnknownAvailable[0]['aadharNumber'] != '') ? $getIfUnknownAvailable[0]['aadharNumber'] : $aadhar),'xxxxxxxx',0,8),
                                'type' => 'ngo',
                                'date' => date('d-m-Y h:i A',strtotime($getIfUnknownAvailable[0]['dateCreated'])),
                                'address' => strtoupper($getNgoDetail[0]['ngoName'].' - '.$getNgoDetail[0]['ngoState'].', '.$getNgoDetail[0]['ngoDistrict'].', '.$getNgoDetail[0]['ngoCity']),
                                'photo' => base_url().''.$getIfUnknownAvailable[0]['Photo'],
                                'age' => $getIfUnknownAvailable[0]['Age'],
                                'gender' => ($getIfUnknownAvailable[0]['Gender'] == 'boy' ? 'Male' : 'Female'),
                                'registration_mobile' => (($getNgoDetail[0]['ngoRegistrationNumber'] != NULL) ? $getNgoDetail[0]['ngoRegistrationNumber'] : ''),
                                'mobile1' => (($getIfUnknownAvailable[0]['well1'] != NULL) ? $getIfUnknownAvailable[0]['well1'] : ''),
                                'mobile2' => (($getIfUnknownAvailable[0]['well2'] != NULL) ? $getIfUnknownAvailable[0]['well2'] : ''),
                                'mobile3' => (($getIfUnknownAvailable[0]['well3'] != NULL) ? $getIfUnknownAvailable[0]['well3'] : ''),
                                'id' => $getIfUnknownAvailable[0]['Application_no']
                            );   
                        }
                    }else{
                        $finalresponse = array(
                            'isUserFound' => $isUserFound,
                            'status' => 'unknown',
                            'isLapata' => $isLapata,
                            'personName' => strtoupper($personName),
                            'aadharNumber' => substr_replace((($getIfUnknownAvailable[0]['aadharNumber'] != '') ? $getIfUnknownAvailable[0]['aadharNumber'] : $aadhar),'xxxxxxxx',0,8),
                            'address' => strtoupper($address),
                            'photo' => ($userphoto != '' ? $userphoto : base_url().$getIfUnknownAvailable[0]['Photo']),
                            'age' => $age,
                            'gender' => strtolower($gender),
                            'id' => $getIfUnknownAvailable[0]['Application_no']
                        );
                    }
                    $insertdata = array(
                        'lapataId' => $lapataId,
                        'isLapata' => $isLapata,
                        'wantedIds' => implode(',',$wantedId),
                        'criminalIds' => implode(',',$criminalId),
                        'Idtype' => $_POST['idType'],
                        'IdNumber' => $idNumber,
                        'userId' => $_SESSION['user_id'],
                        'isFound' => $isUserFound,
                        'isMissing' => $isMissing,
                        'missingId' => implode(',',$missingId),
                        'personId' => $personId
                    );
                    $insert = $this->db->insert('searchpersonhistory',$insertdata);
                    $_SESSION['searchId'] = $this->db->insert_id();
                    echo json_encode($finalresponse);
                }else{
                    $insertdata = array(
                        'lapataId' => $lapataId,
                        'isLapata' => $isLapata,
                        'wantedIds' => implode(',',$wantedId),
                        'criminalIds' => implode(',',$criminalId),
                        'Idtype' => $_POST['idType'],
                        'IdNumber' => $idNumber,
                        'userId' => $_SESSION['user_id'],
                        'isFound' => $isUserFound,
                        'isMissing' => $isMissing,
                        'missingId' => implode(',',$missingId),
                        'personId' => $personId
                    );
                    $insert = $this->db->insert('searchpersonhistory',$insertdata);
                    if($insert)
                    {
                        if($isAadharCorrect == 1)
                        {
                            $_SESSION['searchId'] = $this->db->insert_id();
                            $isOnlyUser = 0;
                            if(!$isWanted && !$isLapata && !$isCriminal && !$isMissing)
                            {
                                $isOnlyUser = 1;
                            }
                            $response = array(
                                'personId' => $personId,
                                'isOnlyUser' => $isOnlyUser,
                                'status' => 'success',
                                'personName' => $personName,
                                'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                                'gender' => strtolower($gender),
                                'isWanted' => $isWanted,
                                'isLapata' => $isLapata,
                                'isCriminal' => $isCriminal,
                                'age' => $age,
                                'address' => $address,
                                'isAadharCorrect' => $isAadharCorrect,
                                'isDobCorrect' => 1,
                                'isGenderCorrect' => 1,
                                'message' => 'Person Found',
                                'isVisible' => $isVisible,
                                'isMissing' => $isMissing,
                                'isVerified' => $isVerified,
                                'isRegistered' => $isUserFound,
                                'image' => ($userphoto != '' ? $userphoto : base_url().'assets/img/noimage.jpg')
                            );
                            echo json_encode($response);   
                        }else{
                            $response = array(
                                'status' => 'incorrect',
                                'isAadharCorrect' => $isAadharCorrect,
                                'isDobCorrect' => 1,
                                'isGenderCorrect' => 1,
                            );
                            echo json_encode($response);   
                        }
                    }else{
                        $response = array(
                            'status' => 'error',
                            'message' => 'Something Went Wrong'
                        );
                        echo json_encode($response);
                    }
                }   
            }else{
                $getApplicationNumber = $this->db->query('select * from unknown_person where id='.$lapataId)->result_array();
                $notifyData = array(
                    'isLogin' => 1,
                    'policeId' => $_SESSION['police_id'],
                    'dateCreated' => date('Y-m-d H:i:s'),
                    'mobileNumber' => $_SESSION['loginmob'],
                    'searchedAppNumber' => $getApplicationNumber[0]['Application_no'],
                    'searchType' => 'Lapata',
                    'complainantUserType' => $getApplicationNumber[0]['uploaded_by'],
                    'complainantUserId' => ($getApplicationNumber[0]['uploaded_by'] == 'police' ? $getApplicationNumber[0]['policeId'] : ($getApplicationNumber[0]['uploaded_by'] == 'ngo' ? $getApplicationNumber[0]['ngoId'] : $getApplicationNumber[0]['userId'])),
                    'isIdentity' => 1,
                    'identityType' => 'dl',
                    'identityNumber' => $_POST['IdNumber']
                );
                $insert = $this->db->insert('searchnotification',$notifyData);
                if($getApplicationNumber[0]['uploaded_by'] == 'user')
                {
                    $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='user' and userId=".$getApplicationNumber[0]['userId']);
                    $query_res = $query->result_array();
                    
                    if(count($query_res) > 0)
                    {
                        foreach ($query_res as $query_res_data) {
                            $registrationIds[] =$query_res_data['token'];
                        }
                        
                        $url ="https://fcm.googleapis.com/fcm/send";
                        $fields=array(
                            "registration_ids"=>$registrationIds,
                            'data' => array("msg"=>"Khoji"),
                            'priority' => 'high',
                            "click_action"=>base_url(),
                            "notification"=>array(
                                "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - THANA -".$_SESSION['thanaName'].' has searched. Click here to check your notification.',
                                "title"=>"Khoji",
                            )   
                        );
                        $headers=array(
                            'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                            'Content-Type:application/json'
                        );
                        $ch=curl_init();
                        curl_setopt($ch,CURLOPT_URL,$url);
                        curl_setopt($ch,CURLOPT_POST,true);
                        curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                        curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                        curl_exec($ch);
                    }
                }else if($getApplicationNumber[0]['uploaded_by'] == 'police')
                {
                    $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='police' and userId=".$getApplicationNumber[0]['policeId']);
                    $query_res = $query->result_array();
                    
                    if(count($query_res) > 0)
                    {
                        foreach ($query_res as $query_res_data) {
                            $registrationIds[] =$query_res_data['token'];
                        }
                        
                        $url ="https://fcm.googleapis.com/fcm/send";
                        $fields=array(
                            "registration_ids"=>$registrationIds,
                            'data' => array("msg"=>"Khoji"),
                            'priority' => 'high',
                            "click_action"=>base_url(),
                            "notification"=>array(
                                "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - THANA -".$_SESSION['thanaName'].' has searched. Click here to check your notification.',
                                "title"=>"Khoji",
                            )   
                        );
                        $headers=array(
                            'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                            'Content-Type:application/json'
                        );
                        $ch=curl_init();
                        curl_setopt($ch,CURLOPT_URL,$url);
                        curl_setopt($ch,CURLOPT_POST,true);
                        curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                        curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                        curl_exec($ch);
                    }
                }else{
                    $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='ngo' and userId=".$getApplicationNumber[0]['ngoId']);
                    $query_res = $query->result_array();
                    
                    if(count($query_res) > 0)
                    {
                        foreach ($query_res as $query_res_data) {
                            $registrationIds[] =$query_res_data['token'];
                        }
                        
                        $url ="https://fcm.googleapis.com/fcm/send";
                        $fields=array(
                            "registration_ids"=>$registrationIds,
                            'data' => array("msg"=>"Khoji"),
                            'priority' => 'high',
                            "click_action"=>base_url(),
                            "notification"=>array(
                                "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - THANA -".$_SESSION['thanaName'].' has searched. Click here to check your notification.',
                                "title"=>"Khoji",
                            )   
                        );
                        $headers=array(
                            'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                            'Content-Type:application/json'
                        );
                        $ch=curl_init();
                        curl_setopt($ch,CURLOPT_URL,$url);
                        curl_setopt($ch,CURLOPT_POST,true);
                        curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                        curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                        curl_exec($ch);
                    }
                }
                $insertdata = array(
                    'lapataId' => $lapataId,
                    'isLapata' => $isLapata,
                    'wantedIds' => implode(',',$wantedId),
                    'criminalIds' => implode(',',$criminalId),
                    'Idtype' => $_POST['idType'],
                    'IdNumber' => $idNumber,
                    'userId' => $_SESSION['user_id'],
                    'isFound' => $isUserFound,
                    'isMissing' => $isMissing,
                    'missingId' => implode(',',$missingId),
                    'personId' => $personId
                );
                $insert = $this->db->insert('searchpersonhistory',$insertdata);
                if($insert)
                {
                    if($isAadharCorrect == 1)
                    {
                        $_SESSION['searchId'] = $this->db->insert_id();
                        $isOnlyUser = 0;
                        if(!$isWanted && !$isLapata && !$isCriminal && !$isMissing)
                        {
                            $isOnlyUser = 1;
                        }
                        $response = array(
                            'personId' => $personId,
                            'isOnlyUser' => $isOnlyUser,
                            'status' => 'success',
                            'personName' => $personName,
                            'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                            'gender' => strtolower($gender),
                            'isWanted' => $isWanted,
                            'isLapata' => $isLapata,
                            'isCriminal' => $isCriminal,
                            'age' => $age,
                            'address' => $address,
                            'isAadharCorrect' => $isAadharCorrect,
                            'isDobCorrect' => 1,
                            'isGenderCorrect' => 1,
                            'message' => 'Person Found',
                            'isVisible' => $isVisible,
                            'isMissing' => $isMissing,
                            'isVerified' => $isVerified,
                            'isRegistered' => $isUserFound,
                            'image' => ($userphoto != '' ? $userphoto : base_url().'assets/img/noimage.jpg')
                        );
                        echo json_encode($response);   
                    }else{
                        $response = array(
                            'status' => 'incorrect',
                            'isAadharCorrect' => $isAadharCorrect,
                            'isDobCorrect' => 1,
                            'isGenderCorrect' => 1,
                        );
                        echo json_encode($response);   
                    }
                }else{
                    $response = array(
                        'status' => 'error',
                        'message' => 'Something Went Wrong'
                    );
                    echo json_encode($response);
                }   
            }
        }
        if($_POST['idType'] == 'voter')
        {
            $idNumber = $_POST['IdNumber'];
            $getIfAlready = $this->db->query('select * from voterslist where voterNumber="'.$idNumber.'"')->result_array();
            if(count($getIfAlready) > 0)
            {
                $getIfPersonAvailable = $this->db->query('select * from user where uid='.$getIfAlready[0]['userId'])->result_array();   
            }else{
                $getIfPersonAvailable = array();
            }
            $userphoto = '';
            if(count($getIfPersonAvailable) > 0)
            {
                $personId = $getIfPersonAvailable[0]['uid'];
                $isAadharCorrect = 1;
                $isVisible = $getIfPersonAvailable[0]['visibility'];
                $isVerified = 1;
                $isUserFound = 1;
                $personName = $getIfPersonAvailable[0]['aadharname'];
                $gender = $getIfPersonAvailable[0]['gender'];
                $aadhar = $getIfPersonAvailable[0]['aadhar_id'];
                $from=new DateTime(date('Y-m-d'));
                $to   = new DateTime($getIfPersonAvailable[0]['dob']);
                $age = ($from->diff($to)->y);
                $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                $userphoto = base_url().''.(($getIfPersonAvailable[0]['aadharphoto'] != NULL) ? $getIfPersonAvailable[0]['aadharphoto'] : $getIfPersonAvailable[0]['facematchphoto']);
            }
            if(count($getIfPersonAvailable) > 0)
            {
                $getIfWantedAvailable = $this->db->query('select * from criminals where aadharNumber="'.$getIfPersonAvailable[0]['aadhar_id'].'" and isFinalSubmitted=1 and type="wanted" and status="Active"')->result_array();   
            }else{
                $getIfWantedAvailable = array();
            }
            if(count($getIfWantedAvailable) > 0)
            {
                $isVisible = 1;
                $isAadharCorrect = 1;
                $isWanted = 1;
                if($isUserFound != 1)
                {
                    $personName = $getIfWantedAvailable[0]['personName'];
                    $gender = $getIfWantedAvailable[0]['gender'];
                    $aadhar = $getIfWantedAvailable[0]['aadharNumber'];
                    if($getIfWantedAvailable[0]['dob'] != '0000-00-00')
                    {
                        $from=new DateTime(date('Y-m-d'));
                        $to   = new DateTime($getIfWantedAvailable[0]['dob']);
                        $age = ($from->diff($to)->y);
                    }else{
                        $age = '';
                    }
                    $address = '';
                    if($getIfWantedAvailable[0]['state'] != '')
                    {
                        $address .= $getIfWantedAvailable[0]['state'];
                    }
                    if($getIfWantedAvailable[0]['district'] != '')
                    {
                        if($address != '')
                        {
                            $address .= ' , '.$getIfWantedAvailable[0]['district'];
                        }else{
                            $address .= $getIfWantedAvailable[0]['district'];
                        }
                    }
                    if($getIfWantedAvailable[0]['city'] != '')
                    {
                        if($address != '')
                        {
                            $address .= ' , '.$getIfWantedAvailable[0]['city'];
                        }else{
                            $address .= $getIfWantedAvailable[0]['city'];
                        }
                    }
                    $getPhotos = $this->db->query('select * from criminalphotos where crimeId='.$getIfWantedAvailable[0]['Id'])->result_array();
                    if($userphoto == '' || $userphoto == base_url())
                    {
                        $userphoto = ((count($getPhotos) > 0) ? base_url().''.$getPhotos[0]['photourl'] : base_url().''.$getIfWantedAvailable[0]['photo']);   
                    }
                }
                foreach($getIfWantedAvailable as $k=>$v)
                {
                    array_push($wantedId,$v['Id']);
                }
            }
            if(count($getIfPersonAvailable) > 0)
            {
                $getIfCriminalAvailable = $this->db->query('select * from criminals where aadharNumber="'.$getIfPersonAvailable[0]['aadhar_id'].'" and isFinalSubmitted=1 and type="criminal" and status="Active"')->result_array();   
            }else{
                $getIfCriminalAvailable = array();
            }
            if(count($getIfCriminalAvailable) > 0)
            {
                $isVisible = 1;
                $isAadharCorrect = 1;
                $isCriminal = 1;
                if($isUserFound != 1)
                {
                    $personName = $getIfCriminalAvailable[0]['personName'];
                    $gender = $getIfCriminalAvailable[0]['gender'];
                    $aadhar = $getIfCriminalAvailable[0]['aadharNumber'];
                    if($getIfCriminalAvailable[0]['dob'] != '0000-00-00')
                    {
                        $from=new DateTime(date('Y-m-d'));
                        $to   = new DateTime($getIfCriminalAvailable[0]['dob']);
                        $age = ($from->diff($to)->y);
                    }else{
                        $age = '';
                    }
                    $address = '';
                    if($getIfCriminalAvailable[0]['state'] != '')
                    {
                        $address .= $getIfCriminalAvailable[0]['state'];
                    }
                    if($getIfCriminalAvailable[0]['district'] != '')
                    {
                        if($address != '')
                        {
                            $address .= ' , '.$getIfCriminalAvailable[0]['district'];
                        }else{
                            $address .= $getIfCriminalAvailable[0]['district'];
                        }
                    }
                    if($getIfCriminalAvailable[0]['city'] != '')
                    {
                        if($address != '')
                        {
                            $address .= ' , '.$getIfCriminalAvailable[0]['city'];
                        }else{
                            $address .= $getIfCriminalAvailable[0]['city'];
                        }
                    }
                    $getPhotos = $this->db->query('select * from criminalphotos where crimeId='.$getIfCriminalAvailable[0]['Id'])->result_array();
                    if($userphoto == '' || $userphoto == base_url())
                    {
                        $userphoto = ((count($getPhotos) > 0) ? base_url().''.$getPhotos[0]['photourl'] : base_url().''.$getIfCriminalAvailable[0]['photo']);   
                    }
                }
                foreach($getIfCriminalAvailable as $k=>$v)
                {
                    array_push($criminalId,$v['Id']);
                }
            }
            if(count($getIfPersonAvailable) > 0)
            {
                $getMissingPerson = $this->db->query('select * from missingperson where missingaadhar="'.$getIfPersonAvailable[0]['aadhar_id'].'" and isFound != 1')->result_array();   
            }else{
                $getMissingPerson = array();
            }
            if(count($getMissingPerson) > 0)
            {
                $isVisible = 1;
                $isAadharCorrect = 1;
                if($getMissingPerson[0]['missinggender'] != NULL)
                {
                    $isMissing = 1;
                    if($isUserFound != 1)
                    {
                        $personName = $getMissingPerson[0]['missingname'];
                        $gender = $getMissingPerson[0]['missinggender'];
                        $aadhar = $getMissingPerson[0]['missingaadhar'];
                        $from=new DateTime(date('Y-m-d'));
                        $to   = new DateTime($getMissingPerson[0]['missingdob']);
                        $age = ($from->diff($to)->y);
                        if(count($getIfPersonAvailable) > 0)
                        {
                            $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                        }else{
                            $address = $getMissingPerson[0]['fathercity'].','.$getMissingPerson[0]['fatherstate'];
                        }
                        if(count($getIfPersonAvailable) == 0)
                        {
                            if($userphoto == '' || $userphoto == base_url())
                            {
                                $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : '');
                            }
                        }
                    }
                }else{
                    $getFullDetail = $this->db->query('select * from missingpersondetail where missingId='.$getMissingPerson[0]['Id'])->result_array();
                    if(count($getFullDetail) > 0)
                    {
                        $isMissing = 1; 
                        if($isUserFound != 1)
                        {
                            $personName = $getMissingPerson[0]['missingname'];
                            $gender = $getMissingPerson[0]['missinggender'];
                            $aadhar = $getMissingPerson[0]['missingaadhar'];
                            $from=new DateTime(date('Y-m-d'));
                            $to   = new DateTime($getMissingPerson[0]['missingdob']);
                            $age = ($from->diff($to)->y);
                            if(count($getIfPersonAvailable) > 0)
                            {
                                $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                            }else{
                                $address = $getMissingPerson[0]['fathercity'].','.$getMissingPerson[0]['fatherstate'];
                            }
                            if(count($getIfPersonAvailable) == 0)
                            {
                                if($userphoto == '' || $userphoto == base_url())
                                {
                                    $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : '');
                                }
                            }
                        }
                    }else{
                        $getUserDetail = $this->db->query('select * from user where aadhar_id="'.$getIfPersonAvailable[0]['aadhar_id'].'"')->result_array();
                        if(count($getUserDetail) > 0)
                        {
                            $isMissing = 1; 
                            if($isUserFound != 1)
                            {
                                $personName = $getUserDetail[0]['aadharname'];
                                $gender = $getUserDetail[0]['gender'];
                                $aadhar = $getUserDetail[0]['aadhar_id'];
                                $from=new DateTime(date('Y-m-d'));
                                $to   = new DateTime($getUserDetail[0]['dob']);
                                $age = ($from->diff($to)->y);
                                $address = $getUserDetail[0]['vtc'].','.$getUserDetail[0]['state'];
                                if(count($getIfPersonAvailable) == 0)
                                {
                                    if($userphoto == '' || $userphoto == base_url())
                                    {
                                        $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : '');
                                    }
                                }
                            }
                        }
                    }
                }
            }
            $getIfLapataAvailable = $this->db->query('select * from unknown_person where uploaded_by="user" and isFound=0 and voter_id="'.$_POST['IdNumber'].'" and expiryDate >= "'.date('Y-m-d h:i:s').'"')->result_array();
            if(count($getIfLapataAvailable) > 0)
            {
                $isAadharCorrect = 1;
                $isVisible = 1;
                $isLapata = 1;
                $lapataId = $getIfLapataAvailable[0]['id'];
                $isMissing = 0;
                $missingId = 0;
                if(!$isUserFound)
                {
                    $isVerified = 0;
                    $personName = $getIfLapataAvailable[0]['person_name'];
                    $gender = ($getIfLapataAvailable[0]['Gender'] == 'boy' ? 'MALE' : 'FEMALE');
                    $aadhar = $getIfLapataAvailable[0]['aadharNumber'];
                    $age = ($getIfLapataAvailable[0]['Age']);
                    $address = $getIfLapataAvailable[0]['city'].','.$getIfLapataAvailable[0]['state'];
                    $userphoto = base_url().''.(($getIfLapataAvailable[0]['Photo'] != NULL) ? $getIfLapataAvailable[0]['Photo'] : $userphoto);
                }
            }
            if($this->getSettings('generalNotification') == 'true')
            {
                if($personId != '')
                {
                    $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='user' and userId=".$personId);
                    $query_res = $query->result_array();
                    
                    if(count($query_res) > 0)
                    {
                        foreach ($query_res as $query_res_data) {
                            $registrationIds[] =$query_res_data['token'];
                        }
                        
                        $url ="https://fcm.googleapis.com/fcm/send";
                        $fields=array(
                            "registration_ids"=>$registrationIds,
                            'data' => array("msg"=>"Khoji"),
                            'priority' => 'high',
                            "click_action"=>base_url(),
                            "notification"=>array(
                                "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - THANA -".$_SESSION['thanaName'].' has searched. Click here to check your notification.',
                                "title"=>"Khoji",
                            )   
                        );
                        $headers=array(
                            'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                            'Content-Type:application/json'
                        );
                        $ch=curl_init();
                        curl_setopt($ch,CURLOPT_URL,$url);
                        curl_setopt($ch,CURLOPT_POST,true);
                        curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                        curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                        curl_exec($ch);
                    }
                }   
            }
            if($isLapata != 1)
            {
                $getIfUnknownAvailable = $this->db->query('select * from unknown_person where uploaded_by !="user" and isFound=0 and voter_id="'.$_POST['IdNumber'].'" order by id desc')->result_array();
                if(count($getIfUnknownAvailable) > 0)
                {
                    $getApplicationNumber = $this->db->query('select * from unknown_person where id='.$getIfUnknownAvailable[0]['id'])->result_array();
                    $notifyData = array(
                        'isLogin' => 1,
                        'policeId' => $_SESSION['police_id'],
                        'dateCreated' => date('Y-m-d H:i:s'),
                        'mobileNumber' => $_SESSION['loginmob'],
                        'searchedAppNumber' => $getApplicationNumber[0]['Application_no'],
                        'searchType' => 'Lapata',
                        'complainantUserType' => $getApplicationNumber[0]['uploaded_by'],
                        'complainantUserId' => ($getApplicationNumber[0]['uploaded_by'] == 'police' ? $getApplicationNumber[0]['policeId'] : ($getApplicationNumber[0]['uploaded_by'] == 'ngo' ? $getApplicationNumber[0]['ngoId'] : $getApplicationNumber[0]['userId'])),
                        'isIdentity' => 1,
                        'identityType' => 'voter',
                        'identityNumber' => $_POST['IdNumber']
                    );
                    $insert = $this->db->insert('searchnotification',$notifyData);
                    if($getApplicationNumber[0]['uploaded_by'] == 'user')
                    {
                        $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='user' and userId=".$getApplicationNumber[0]['userId']);
                        $query_res = $query->result_array();
                        
                        if(count($query_res) > 0)
                        {
                            foreach ($query_res as $query_res_data) {
                                $registrationIds[] =$query_res_data['token'];
                            }
                            
                            $url ="https://fcm.googleapis.com/fcm/send";
                            $fields=array(
                                "registration_ids"=>$registrationIds,
                                'data' => array("msg"=>"Khoji"),
                                'priority' => 'high',
                                "click_action"=>base_url(),
                                "notification"=>array(
                                    "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - THANA -".$_SESSION['thanaName'].' has searched. Click here to check your notification.',
                                    "title"=>"Khoji",
                                )   
                            );
                            $headers=array(
                                'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                                'Content-Type:application/json'
                            );
                            $ch=curl_init();
                            curl_setopt($ch,CURLOPT_URL,$url);
                            curl_setopt($ch,CURLOPT_POST,true);
                            curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                            curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                            curl_exec($ch);
                        }
                    }else if($getApplicationNumber[0]['uploaded_by'] == 'police')
                    {
                        $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='police' and userId=".$getApplicationNumber[0]['policeId']);
                        $query_res = $query->result_array();
                        
                        if(count($query_res) > 0)
                        {
                            foreach ($query_res as $query_res_data) {
                                $registrationIds[] =$query_res_data['token'];
                            }
                            
                            $url ="https://fcm.googleapis.com/fcm/send";
                            $fields=array(
                                "registration_ids"=>$registrationIds,
                                'data' => array("msg"=>"Khoji"),
                                'priority' => 'high',
                                "click_action"=>base_url(),
                                "notification"=>array(
                                    "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - THANA -".$_SESSION['thanaName'].' has searched. Click here to check your notification.',
                                    "title"=>"Khoji",
                                )   
                            );
                            $headers=array(
                                'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                                'Content-Type:application/json'
                            );
                            $ch=curl_init();
                            curl_setopt($ch,CURLOPT_URL,$url);
                            curl_setopt($ch,CURLOPT_POST,true);
                            curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                            curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                            curl_exec($ch);
                        }
                    }else{
                        $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='ngo' and userId=".$getApplicationNumber[0]['ngoId']);
                        $query_res = $query->result_array();
                        
                        if(count($query_res) > 0)
                        {
                            foreach ($query_res as $query_res_data) {
                                $registrationIds[] =$query_res_data['token'];
                            }
                            
                            $url ="https://fcm.googleapis.com/fcm/send";
                            $fields=array(
                                "registration_ids"=>$registrationIds,
                                'data' => array("msg"=>"Khoji"),
                                'priority' => 'high',
                                "click_action"=>base_url(),
                                "notification"=>array(
                                    "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - THANA -".$_SESSION['thanaName'].' has searched. Click here to check your notification.',
                                    "title"=>"Khoji",
                                )   
                            );
                            $headers=array(
                                'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                                'Content-Type:application/json'
                            );
                            $ch=curl_init();
                            curl_setopt($ch,CURLOPT_URL,$url);
                            curl_setopt($ch,CURLOPT_POST,true);
                            curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                            curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                            curl_exec($ch);
                        }
                    }
                    if($isUserFound != 1)
                    {
                        if($getIfUnknownAvailable[0]['uploaded_by'] == 'police')
                        {
                            $getPoliceDetail = $this->db->query('select * from police where police_id='.$getIfUnknownAvailable[0]['policeId'])->result_array();
                            $finalresponse = array(
                                'status' => 'unknown',
                                'isLapata' => $isLapata,
                                'isUserFound' => $isUserFound,
                                'personName' => strtoupper($getIfUnknownAvailable[0]['person_name']),
                                'aadharNumber' => substr_replace((($getIfUnknownAvailable[0]['aadharNumber'] != '') ? $getIfUnknownAvailable[0]['aadharNumber'] : $aadhar),'xxxxxxxx',0,8),
                                'type' => 'police',
                                'date' => date('d-m-Y h:i A',strtotime($getIfUnknownAvailable[0]['dateCreated'])),
                                'address' => strtoupper($getPoliceDetail[0]['thanaName'].' - '.$getPoliceDetail[0]['state'].', '.$getPoliceDetail[0]['district']),
                                'photo' => base_url().''.$getIfUnknownAvailable[0]['Photo'],
                                'age' => $getIfUnknownAvailable[0]['Age'],
                                'gender' => ($getIfUnknownAvailable[0]['Gender'] == 'boy' ? 'Male' : 'Female'),
                                'id' => $getIfUnknownAvailable[0]['Application_no'],
                                'registration_mobile' => (($getPoliceDetail[0]['registration_mobile'] != NULL) ? $getPoliceDetail[0]['registration_mobile'] : ''),
                                'mobile1' => (($getIfUnknownAvailable[0]['well1'] != NULL) ? $getIfUnknownAvailable[0]['well1'] : ''),
                                'mobile2' => (($getIfUnknownAvailable[0]['well2'] != NULL) ? $getIfUnknownAvailable[0]['well2'] : ''),
                                'mobile3' => (($getIfUnknownAvailable[0]['well3'] != NULL) ? $getIfUnknownAvailable[0]['well3'] : ''),
                            );   
                        }else{
                            $getNgoDetail = $this->db->query('select * from ngo where Id='.$getIfUnknownAvailable[0]['ngoId'])->result_array();
                            $finalresponse = array(
                                'status' => 'unknown',
                                'isLapata' => $isLapata,
                                'isUserFound' => $isUserFound,
                                'personName' => strtoupper($getIfUnknownAvailable[0]['person_name']),
                                'aadharNumber' => substr_replace((($getIfUnknownAvailable[0]['aadharNumber'] != '') ? $getIfUnknownAvailable[0]['aadharNumber'] : $aadhar),'xxxxxxxx',0,8),
                                'type' => 'ngo',
                                'date' => date('d-m-Y h:i A',strtotime($getIfUnknownAvailable[0]['dateCreated'])),
                                'address' => strtoupper($getNgoDetail[0]['ngoName'].' - '.$getNgoDetail[0]['ngoState'].', '.$getNgoDetail[0]['ngoDistrict'].', '.$getNgoDetail[0]['ngoCity']),
                                'photo' => base_url().''.$getIfUnknownAvailable[0]['Photo'],
                                'age' => $getIfUnknownAvailable[0]['Age'],
                                'gender' => ($getIfUnknownAvailable[0]['Gender'] == 'boy' ? 'Male' : 'Female'),
                                'registration_mobile' => (($getNgoDetail[0]['ngoRegistrationNumber'] != NULL) ? $getNgoDetail[0]['ngoRegistrationNumber'] : ''),
                                'mobile1' => (($getIfUnknownAvailable[0]['well1'] != NULL) ? $getIfUnknownAvailable[0]['well1'] : ''),
                                'mobile2' => (($getIfUnknownAvailable[0]['well2'] != NULL) ? $getIfUnknownAvailable[0]['well2'] : ''),
                                'mobile3' => (($getIfUnknownAvailable[0]['well3'] != NULL) ? $getIfUnknownAvailable[0]['well3'] : ''),
                                'id' => $getIfUnknownAvailable[0]['Application_no']
                            );   
                        }
                    }else{
                        $finalresponse = array(
                            'isUserFound' => $isUserFound,
                            'status' => 'unknown',
                            'isLapata' => $isLapata,
                            'personName' => strtoupper($personName),
                            'aadharNumber' => substr_replace((($getIfUnknownAvailable[0]['aadharNumber'] != '') ? $getIfUnknownAvailable[0]['aadharNumber'] : $aadhar),'xxxxxxxx',0,8),
                            'address' => strtoupper($address),
                            'photo' => ($userphoto != '' ? $userphoto : base_url().$getIfUnknownAvailable[0]['Photo']),
                            'age' => $age,
                            'gender' => strtolower($gender),
                            'id' => $getIfUnknownAvailable[0]['Application_no']
                        );
                    }
                    $insertdata = array(
                        'lapataId' => $lapataId,
                        'isLapata' => $isLapata,
                        'wantedIds' => implode(',',$wantedId),
                        'criminalIds' => implode(',',$criminalId),
                        'Idtype' => $_POST['idType'],
                        'IdNumber' => $idNumber,
                        'userId' => $_SESSION['user_id'],
                        'isFound' => $isUserFound,
                        'isMissing' => $isMissing,
                        'missingId' => implode(',',$missingId),
                        'personId' => $personId
                    );
                    $insert = $this->db->insert('searchpersonhistory',$insertdata);
                    $_SESSION['searchId'] = $this->db->insert_id();
                    echo json_encode($finalresponse);
                }else{
                    $insertdata = array(
                        'lapataId' => $lapataId,
                        'isLapata' => $isLapata,
                        'wantedIds' => implode(',',$wantedId),
                        'criminalIds' => implode(',',$criminalId),
                        'Idtype' => $_POST['idType'],
                        'IdNumber' => $idNumber,
                        'userId' => $_SESSION['user_id'],
                        'isFound' => $isUserFound,
                        'isMissing' => $isMissing,
                        'missingId' => implode(',',$missingId),
                        'personId' => $personId
                    );
                    $insert = $this->db->insert('searchpersonhistory',$insertdata);
                    if($insert)
                    {
                        if($isAadharCorrect == 1)
                        {
                            $_SESSION['searchId'] = $this->db->insert_id();
                            $isOnlyUser = 0;
                            if(!$isWanted && !$isLapata && !$isCriminal && !$isMissing)
                            {
                                $isOnlyUser = 1;
                            }
                            $response = array(
                                'personId' => $personId,
                                'isOnlyUser' => $isOnlyUser,
                                'status' => 'success',
                                'personName' => $personName,
                                'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                                'gender' => strtolower($gender),
                                'isWanted' => $isWanted,
                                'isLapata' => $isLapata,
                                'isCriminal' => $isCriminal,
                                'age' => $age,
                                'address' => $address,
                                'isAadharCorrect' => $isAadharCorrect,
                                'isDobCorrect' => 1,
                                'isGenderCorrect' => 1,
                                'message' => 'Person Found',
                                'isVisible' => $isVisible,
                                'isMissing' => $isMissing,
                                'isVerified' => $isVerified,
                                'isRegistered' => $isUserFound,
                                'image' => ($userphoto != '' ? $userphoto : base_url().'assets/img/noimage.jpg')
                            );
                            echo json_encode($response);   
                        }else{
                            $response = array(
                                'status' => 'incorrect',
                                'isAadharCorrect' => $isAadharCorrect,
                                'isDobCorrect' => 1,
                                'isGenderCorrect' => 1,
                            );
                            echo json_encode($response);   
                        }
                    }else{
                        $response = array(
                            'status' => 'error',
                            'message' => 'Something Went Wrong'
                        );
                        echo json_encode($response);
                    }
                }   
            }else{
                $getApplicationNumber = $this->db->query('select * from unknown_person where id='.$lapataId)->result_array();
                $notifyData = array(
                    'isLogin' => 1,
                    'policeId' => $_SESSION['police_id'],
                    'dateCreated' => date('Y-m-d H:i:s'),
                    'mobileNumber' => $_SESSION['loginmob'],
                    'searchedAppNumber' => $getApplicationNumber[0]['Application_no'],
                    'searchType' => 'Lapata',
                    'complainantUserType' => $getApplicationNumber[0]['uploaded_by'],
                    'complainantUserId' => ($getApplicationNumber[0]['uploaded_by'] == 'police' ? $getApplicationNumber[0]['policeId'] : ($getApplicationNumber[0]['uploaded_by'] == 'ngo' ? $getApplicationNumber[0]['ngoId'] : $getApplicationNumber[0]['userId'])),
                    'isIdentity' => 1,
                    'identityType' => 'voter',
                    'identityNumber' => $_POST['IdNumber']
                );
                $insert = $this->db->insert('searchnotification',$notifyData);
                if($getApplicationNumber[0]['uploaded_by'] == 'user')
                {
                    $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='user' and userId=".$getApplicationNumber[0]['userId']);
                    $query_res = $query->result_array();
                    
                    if(count($query_res) > 0)
                    {
                        foreach ($query_res as $query_res_data) {
                            $registrationIds[] =$query_res_data['token'];
                        }
                        
                        $url ="https://fcm.googleapis.com/fcm/send";
                        $fields=array(
                            "registration_ids"=>$registrationIds,
                            'data' => array("msg"=>"Khoji"),
                            'priority' => 'high',
                            "click_action"=>base_url(),
                            "notification"=>array(
                                "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - THANA -".$_SESSION['thanaName'].' has searched. Click here to check your notification.',
                                "title"=>"Khoji",
                            )   
                        );
                        $headers=array(
                            'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                            'Content-Type:application/json'
                        );
                        $ch=curl_init();
                        curl_setopt($ch,CURLOPT_URL,$url);
                        curl_setopt($ch,CURLOPT_POST,true);
                        curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                        curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                        curl_exec($ch);
                    }
                }else if($getApplicationNumber[0]['uploaded_by'] == 'police')
                {
                    $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='police' and userId=".$getApplicationNumber[0]['policeId']);
                    $query_res = $query->result_array();
                    
                    if(count($query_res) > 0)
                    {
                        foreach ($query_res as $query_res_data) {
                            $registrationIds[] =$query_res_data['token'];
                        }
                        
                        $url ="https://fcm.googleapis.com/fcm/send";
                        $fields=array(
                            "registration_ids"=>$registrationIds,
                            'data' => array("msg"=>"Khoji"),
                            'priority' => 'high',
                            "click_action"=>base_url(),
                            "notification"=>array(
                                "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - THANA -".$_SESSION['thanaName'].' has searched. Click here to check your notification.',
                                "title"=>"Khoji",
                            )   
                        );
                        $headers=array(
                            'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                            'Content-Type:application/json'
                        );
                        $ch=curl_init();
                        curl_setopt($ch,CURLOPT_URL,$url);
                        curl_setopt($ch,CURLOPT_POST,true);
                        curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                        curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                        curl_exec($ch);
                    }
                }else{
                    $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='ngo' and userId=".$getApplicationNumber[0]['ngoId']);
                    $query_res = $query->result_array();
                    
                    if(count($query_res) > 0)
                    {
                        foreach ($query_res as $query_res_data) {
                            $registrationIds[] =$query_res_data['token'];
                        }
                        
                        $url ="https://fcm.googleapis.com/fcm/send";
                        $fields=array(
                            "registration_ids"=>$registrationIds,
                            'data' => array("msg"=>"Khoji"),
                            'priority' => 'high',
                            "click_action"=>base_url(),
                            "notification"=>array(
                                "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - THANA -".$_SESSION['thanaName'].' has searched. Click here to check your notification.',
                                "title"=>"Khoji",
                            )   
                        );
                        $headers=array(
                            'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                            'Content-Type:application/json'
                        );
                        $ch=curl_init();
                        curl_setopt($ch,CURLOPT_URL,$url);
                        curl_setopt($ch,CURLOPT_POST,true);
                        curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                        curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                        curl_exec($ch);
                    }
                }
                $insertdata = array(
                    'lapataId' => $lapataId,
                    'isLapata' => $isLapata,
                    'wantedIds' => implode(',',$wantedId),
                    'criminalIds' => implode(',',$criminalId),
                    'Idtype' => $_POST['idType'],
                    'IdNumber' => $idNumber,
                    'userId' => $_SESSION['user_id'],
                    'isFound' => $isUserFound,
                    'isMissing' => $isMissing,
                    'missingId' => implode(',',$missingId),
                    'personId' => $personId
                );
                $insert = $this->db->insert('searchpersonhistory',$insertdata);
                if($insert)
                {
                    if($isAadharCorrect == 1)
                    {
                        $_SESSION['searchId'] = $this->db->insert_id();
                        $isOnlyUser = 0;
                        if(!$isWanted && !$isLapata && !$isCriminal && !$isMissing)
                        {
                            $isOnlyUser = 1;
                        }
                        $response = array(
                            'personId' => $personId,
                            'status' => 'success',
                            'isOnlyUser' => $isOnlyUser,
                            'personName' => $personName,
                            'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                            'gender' => strtolower($gender),
                            'isWanted' => $isWanted,
                            'isLapata' => $isLapata,
                            'isCriminal' => $isCriminal,
                            'age' => $age,
                            'address' => $address,
                            'isAadharCorrect' => $isAadharCorrect,
                            'isDobCorrect' => 1,
                            'isGenderCorrect' => 1,
                            'message' => 'Person Found',
                            'isVisible' => $isVisible,
                            'isMissing' => $isMissing,
                            'isVerified' => $isVerified,
                            'isRegistered' => $isUserFound,
                            'image' => ($userphoto != '' ? $userphoto : base_url().'assets/img/noimage.jpg')
                        );
                        echo json_encode($response);   
                    }else{
                        $response = array(
                            'status' => 'incorrect',
                            'isAadharCorrect' => $isAadharCorrect,
                            'isDobCorrect' => 1,
                            'isGenderCorrect' => 1,
                        );
                        echo json_encode($response);   
                    }
                }else{
                    $response = array(
                        'status' => 'error',
                        'message' => 'Something Went Wrong'
                    );
                    echo json_encode($response);
                }   
            }
        }
        if($_POST['idType'] == 'pan')
        {
            $idNumber = $_POST['IdNumber'];
            $getIfAlready = $this->db->query('select * from panlist where panNumber="'.$idNumber.'"')->result_array();
            if(count($getIfAlready) > 0)
            {
                $getIfPersonAvailable = $this->db->query('select * from user where uid='.$getIfAlready[0]['userId'])->result_array();   
            }else{
                $getIfPersonAvailable = array();
            }
            $userphoto = '';
            if(count($getIfPersonAvailable) > 0)
            {
                $personId = $getIfPersonAvailable[0]['uid'];
                $isAadharCorrect = 1;
                $isVisible = $getIfPersonAvailable[0]['visibility'];
                $isVerified = 1;
                $isUserFound = 1;
                $personName = $getIfPersonAvailable[0]['aadharname'];
                $gender = $getIfPersonAvailable[0]['gender'];
                $aadhar = $getIfPersonAvailable[0]['aadhar_id'];
                $from=new DateTime(date('Y-m-d'));
                $to   = new DateTime($getIfPersonAvailable[0]['dob']);
                $age = ($from->diff($to)->y);
                $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                $userphoto = base_url().''.(($getIfPersonAvailable[0]['aadharphoto'] != NULL) ? $getIfPersonAvailable[0]['aadharphoto'] : $getIfPersonAvailable[0]['facematchphoto']);
            }
            if(count($getIfPersonAvailable) > 0)
            {
                $getIfWantedAvailable = $this->db->query('select * from criminals where aadharNumber="'.$getIfPersonAvailable[0]['aadhar_id'].'" and isFinalSubmitted=1 and type="wanted" and status="Active"')->result_array();   
            }else{
                $getIfWantedAvailable = array();
            }
            if(count($getIfWantedAvailable) > 0)
            {
                $isVisible = 1;
                $isAadharCorrect = 1;
                $isWanted = 1;
                if($isUserFound != 1)
                {
                    $personName = $getIfWantedAvailable[0]['personName'];
                    $gender = $getIfWantedAvailable[0]['gender'];
                    $aadhar = $getIfWantedAvailable[0]['aadharNumber'];
                    if($getIfWantedAvailable[0]['dob'] != '0000-00-00')
                    {
                        $from=new DateTime(date('Y-m-d'));
                        $to   = new DateTime($getIfWantedAvailable[0]['dob']);
                        $age = ($from->diff($to)->y);
                    }else{
                        $age = '';
                    }
                    $address = '';
                    if($getIfWantedAvailable[0]['state'] != '')
                    {
                        $address .= $getIfWantedAvailable[0]['state'];
                    }
                    if($getIfWantedAvailable[0]['district'] != '')
                    {
                        if($address != '')
                        {
                            $address .= ' , '.$getIfWantedAvailable[0]['district'];
                        }else{
                            $address .= $getIfWantedAvailable[0]['district'];
                        }
                    }
                    if($getIfWantedAvailable[0]['city'] != '')
                    {
                        if($address != '')
                        {
                            $address .= ' , '.$getIfWantedAvailable[0]['city'];
                        }else{
                            $address .= $getIfWantedAvailable[0]['city'];
                        }
                    }
                    $getPhotos = $this->db->query('select * from criminalphotos where crimeId='.$getIfWantedAvailable[0]['Id'])->result_array();
                    if($userphoto == '' || $userphoto == base_url())
                    {
                        $userphoto = ((count($getPhotos) > 0) ? base_url().''.$getPhotos[0]['photourl'] : base_url().''.$getIfWantedAvailable[0]['photo']);   
                    }
                }
                foreach($getIfWantedAvailable as $k=>$v)
                {
                    array_push($wantedId,$v['Id']);
                }
            }
            if(count($getIfPersonAvailable) > 0)
            {
                $getIfCriminalAvailable = $this->db->query('select * from criminals where aadharNumber="'.$getIfPersonAvailable[0]['aadhar_id'].'" and isFinalSubmitted=1 and type="criminal" and status="Active"')->result_array();   
            }else{
                $getIfCriminalAvailable = array();
            }
            if(count($getIfCriminalAvailable) > 0)
            {
                $isVisible = 1;
                $isAadharCorrect = 1;
                $isCriminal = 1;
                if($isUserFound != 1)
                {
                    $personName = $getIfCriminalAvailable[0]['personName'];
                    $gender = $getIfCriminalAvailable[0]['gender'];
                    $aadhar = $getIfCriminalAvailable[0]['aadharNumber'];
                    if($getIfCriminalAvailable[0]['dob'] != '0000-00-00')
                    {
                        $from=new DateTime(date('Y-m-d'));
                        $to   = new DateTime($getIfCriminalAvailable[0]['dob']);
                        $age = ($from->diff($to)->y);
                    }else{
                        $age = '';
                    }
                    $address = '';
                    if($getIfCriminalAvailable[0]['state'] != '')
                    {
                        $address .= $getIfCriminalAvailable[0]['state'];
                    }
                    if($getIfCriminalAvailable[0]['district'] != '')
                    {
                        if($address != '')
                        {
                            $address .= ' , '.$getIfCriminalAvailable[0]['district'];
                        }else{
                            $address .= $getIfCriminalAvailable[0]['district'];
                        }
                    }
                    if($getIfCriminalAvailable[0]['city'] != '')
                    {
                        if($address != '')
                        {
                            $address .= ' , '.$getIfCriminalAvailable[0]['city'];
                        }else{
                            $address .= $getIfCriminalAvailable[0]['city'];
                        }
                    }
                    $getPhotos = $this->db->query('select * from criminalphotos where crimeId='.$getIfCriminalAvailable[0]['Id'])->result_array();
                    if($userphoto == '' || $userphoto == base_url())
                    {
                        $userphoto = ((count($getPhotos) > 0) ? base_url().''.$getPhotos[0]['photourl'] : base_url().''.$getIfCriminalAvailable[0]['photo']);   
                    }
                }
                foreach($getIfCriminalAvailable as $k=>$v)
                {
                    array_push($criminalId,$v['Id']);
                }
            }
            if(count($getIfPersonAvailable) > 0)
            {
                $getMissingPerson = $this->db->query('select * from missingperson where missingaadhar="'.$getIfPersonAvailable[0]['aadhar_id'].'" and isFound != 1')->result_array();   
            }else{
                $getMissingPerson = array();
            }
            if(count($getMissingPerson) > 0)
            {
                $isVisible = 1;
                $isAadharCorrect = 1;
                if($getMissingPerson[0]['missinggender'] != NULL)
                {
                    $isMissing = 1;
                    if($isUserFound != 1)
                    {
                        $personName = $getMissingPerson[0]['missingname'];
                        $gender = $getMissingPerson[0]['missinggender'];
                        $aadhar = $getMissingPerson[0]['missingaadhar'];
                        $from=new DateTime(date('Y-m-d'));
                        $to   = new DateTime($getMissingPerson[0]['missingdob']);
                        $age = ($from->diff($to)->y);
                        if(count($getIfPersonAvailable) > 0)
                        {
                            $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                        }else{
                            $address = $getMissingPerson[0]['fathercity'].','.$getMissingPerson[0]['fatherstate'];
                        }
                        if(count($getIfPersonAvailable) == 0)
                        {
                            if($userphoto == '' || $userphoto == base_url())
                            {
                                $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : '');
                            }
                        }
                    }
                }else{
                    $getFullDetail = $this->db->query('select * from missingpersondetail where missingId='.$getMissingPerson[0]['Id'])->result_array();
                    if(count($getFullDetail) > 0)
                    {
                        $isMissing = 1; 
                        if($isUserFound != 1)
                        {
                            $personName = $getMissingPerson[0]['missingname'];
                            $gender = $getMissingPerson[0]['missinggender'];
                            $aadhar = $getMissingPerson[0]['missingaadhar'];
                            $from=new DateTime(date('Y-m-d'));
                            $to   = new DateTime($getMissingPerson[0]['missingdob']);
                            $age = ($from->diff($to)->y);
                            if(count($getIfPersonAvailable) > 0)
                            {
                                $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                            }else{
                                $address = $getMissingPerson[0]['fathercity'].','.$getMissingPerson[0]['fatherstate'];
                            }
                            if(count($getIfPersonAvailable) == 0)
                            {
                                if($userphoto == '' || $userphoto == base_url())
                                {
                                    $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : '');
                                }
                            }
                        }
                    }else{
                        $getUserDetail = $this->db->query('select * from user where aadhar_id="'.$getIfPersonAvailable[0]['aadhar_id'].'"')->result_array();
                        if(count($getUserDetail) > 0)
                        {
                            $isMissing = 1; 
                            if($isUserFound != 1)
                            {
                                $personName = $getUserDetail[0]['aadharname'];
                                $gender = $getUserDetail[0]['gender'];
                                $aadhar = $getUserDetail[0]['aadhar_id'];
                                $from=new DateTime(date('Y-m-d'));
                                $to   = new DateTime($getUserDetail[0]['dob']);
                                $age = ($from->diff($to)->y);
                                $address = $getUserDetail[0]['vtc'].','.$getUserDetail[0]['state'];
                                if(count($getIfPersonAvailable) == 0)
                                {
                                    if($userphoto == '' || $userphoto == base_url())
                                    {
                                        $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : '');
                                    }
                                }
                            }
                        }
                    }
                }
            }
            $getIfLapataAvailable = $this->db->query('select * from unknown_person where uploaded_by="user" and isFound=0 and PAN="'.$_POST['IdNumber'].'" and expiryDate >= "'.date('Y-m-d h:i:s').'"')->result_array();
            if(count($getIfLapataAvailable) > 0)
            {
                $isAadharCorrect = 1;
                $isVisible = 1;
                $isLapata = 1;
                $lapataId = $getIfLapataAvailable[0]['id'];
                $isMissing = 0;
                $missingId = 0;
                if(!$isUserFound)
                {
                    $isVerified = 0;
                    $personName = $getIfLapataAvailable[0]['person_name'];
                    $gender = ($getIfLapataAvailable[0]['Gender'] == 'boy' ? 'MALE' : 'FEMALE');
                    $aadhar = $getIfLapataAvailable[0]['aadharNumber'];
                    $age = ($getIfLapataAvailable[0]['Age']);
                    $address = $getIfLapataAvailable[0]['city'].','.$getIfLapataAvailable[0]['state'];
                    $userphoto = base_url().''.(($getIfLapataAvailable[0]['Photo'] != NULL) ? $getIfLapataAvailable[0]['Photo'] : $userphoto);
                }
            }
            
            if($isLapata != 1)
            {
                $getIfUnknownAvailable = $this->db->query('select * from unknown_person where uploaded_by !="user" and isFound=0 and PAN="'.$_POST['IdNumber'].'" order by id desc')->result_array();
                if(count($getIfUnknownAvailable) > 0)
                {
                    $getApplicationNumber = $this->db->query('select * from unknown_person where id='.$lapataId)->result_array();
                    $notifyData = array(
                        'isLogin' => 1,
                        'policeId' => $_SESSION['police_id'],
                        'dateCreated' => date('Y-m-d H:i:s'),
                        'mobileNumber' => $_SESSION['loginmob'],
                        'searchedAppNumber' => $getApplicationNumber[0]['Application_no'],
                        'searchType' => 'Lapata',
                        'complainantUserType' => $getApplicationNumber[0]['uploaded_by'],
                        'complainantUserId' => ($getApplicationNumber[0]['uploaded_by'] == 'police' ? $getApplicationNumber[0]['policeId'] : ($getApplicationNumber[0]['uploaded_by'] == 'ngo' ? $getApplicationNumber[0]['ngoId'] : $getApplicationNumber[0]['userId'])),
                        'isIdentity' => 1,
                        'identityType' => 'pan',
                        'identityNumber' => $_POST['IdNumber']
                    );
                    $insert = $this->db->insert('searchnotification',$notifyData);
                    if($getApplicationNumber[0]['uploaded_by'] == 'user')
                    {
                        $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='user' and userId=".$getApplicationNumber[0]['userId']);
                        $query_res = $query->result_array();
                        
                        if(count($query_res) > 0)
                        {
                            foreach ($query_res as $query_res_data) {
                                $registrationIds[] =$query_res_data['token'];
                            }
                            
                            $url ="https://fcm.googleapis.com/fcm/send";
                            $fields=array(
                                "registration_ids"=>$registrationIds,
                                'data' => array("msg"=>"Khoji"),
                                'priority' => 'high',
                                "click_action"=>base_url(),
                                "notification"=>array(
                                    "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - THANA -".$_SESSION['thanaName'].' has searched. Click here to check your notification.',
                                    "title"=>"Khoji",
                                )   
                            );
                            $headers=array(
                                'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                                'Content-Type:application/json'
                            );
                            $ch=curl_init();
                            curl_setopt($ch,CURLOPT_URL,$url);
                            curl_setopt($ch,CURLOPT_POST,true);
                            curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                            curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                            curl_exec($ch);
                        }
                    }else if($getApplicationNumber[0]['uploaded_by'] == 'police')
                    {
                        $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='police' and userId=".$getApplicationNumber[0]['policeId']);
                        $query_res = $query->result_array();
                        
                        if(count($query_res) > 0)
                        {
                            foreach ($query_res as $query_res_data) {
                                $registrationIds[] =$query_res_data['token'];
                            }
                            
                            $url ="https://fcm.googleapis.com/fcm/send";
                            $fields=array(
                                "registration_ids"=>$registrationIds,
                                'data' => array("msg"=>"Khoji"),
                                'priority' => 'high',
                                "click_action"=>base_url(),
                                "notification"=>array(
                                    "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - THANA -".$_SESSION['thanaName'].' has searched. Click here to check your notification.',
                                    "title"=>"Khoji",
                                )   
                            );
                            $headers=array(
                                'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                                'Content-Type:application/json'
                            );
                            $ch=curl_init();
                            curl_setopt($ch,CURLOPT_URL,$url);
                            curl_setopt($ch,CURLOPT_POST,true);
                            curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                            curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                            curl_exec($ch);
                        }
                    }else{
                        $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='ngo' and userId=".$getApplicationNumber[0]['ngoId']);
                        $query_res = $query->result_array();
                        
                        if(count($query_res) > 0)
                        {
                            foreach ($query_res as $query_res_data) {
                                $registrationIds[] =$query_res_data['token'];
                            }
                            
                            $url ="https://fcm.googleapis.com/fcm/send";
                            $fields=array(
                                "registration_ids"=>$registrationIds,
                                'data' => array("msg"=>"Khoji"),
                                'priority' => 'high',
                                "click_action"=>base_url(),
                                "notification"=>array(
                                    "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - THANA -".$_SESSION['thanaName'].' has searched. Click here to check your notification.',
                                    "title"=>"Khoji",
                                )   
                            );
                            $headers=array(
                                'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                                'Content-Type:application/json'
                            );
                            $ch=curl_init();
                            curl_setopt($ch,CURLOPT_URL,$url);
                            curl_setopt($ch,CURLOPT_POST,true);
                            curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                            curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                            curl_exec($ch);
                        }
                    }
                    if($isUserFound != 1)
                    {
                        if($getIfUnknownAvailable[0]['uploaded_by'] == 'police')
                        {
                            $getPoliceDetail = $this->db->query('select * from police where police_id='.$getIfUnknownAvailable[0]['policeId'])->result_array();
                            $finalresponse = array(
                                'isUserFound' => $isUserFound,
                                'status' => 'unknown',
                                'isLapata' => $isLapata,
                                'personName' => strtoupper($getIfUnknownAvailable[0]['person_name']),
                                'aadharNumber' => substr_replace((($getIfUnknownAvailable[0]['aadharNumber'] != '') ? $getIfUnknownAvailable[0]['aadharNumber'] : $aadhar),'xxxxxxxx',0,8),
                                'type' => 'police',
                                'date' => date('d-m-Y h:i A',strtotime($getIfUnknownAvailable[0]['dateCreated'])),
                                'address' => strtoupper($getPoliceDetail[0]['thanaName'].' - '.$getPoliceDetail[0]['state'].', '.$getPoliceDetail[0]['district']),
                                'photo' => base_url().''.$getIfUnknownAvailable[0]['Photo'],
                                'age' => $getIfUnknownAvailable[0]['Age'],
                                'gender' => ($getIfUnknownAvailable[0]['Gender'] == 'boy' ? 'Male' : 'Female'),
                                'id' => $getIfUnknownAvailable[0]['Application_no'],
                                'registration_mobile' => (($getPoliceDetail[0]['registration_mobile'] != NULL) ? $getPoliceDetail[0]['registration_mobile'] : ''),
                                'mobile1' => (($getIfUnknownAvailable[0]['well1'] != NULL) ? $getIfUnknownAvailable[0]['well1'] : ''),
                                'mobile2' => (($getIfUnknownAvailable[0]['well2'] != NULL) ? $getIfUnknownAvailable[0]['well2'] : ''),
                                'mobile3' => (($getIfUnknownAvailable[0]['well3'] != NULL) ? $getIfUnknownAvailable[0]['well3'] : ''),
                            );   
                        }else{
                            $getNgoDetail = $this->db->query('select * from ngo where Id='.$getIfUnknownAvailable[0]['ngoId'])->result_array();
                            $finalresponse = array(
                                'status' => 'unknown',
                                'isUserFound' => $isUserFound,
                                'isLapata' => $isLapata,
                                'personName' => strtoupper($getIfUnknownAvailable[0]['person_name']),
                                'aadharNumber' => substr_replace((($getIfUnknownAvailable[0]['aadharNumber'] != '') ? $getIfUnknownAvailable[0]['aadharNumber'] : $aadhar),'xxxxxxxx',0,8),
                                'type' => 'ngo',
                                'date' => date('d-m-Y h:i A',strtotime($getIfUnknownAvailable[0]['dateCreated'])),
                                'address' => strtoupper($getNgoDetail[0]['ngoName'].' - '.$getNgoDetail[0]['ngoState'].', '.$getNgoDetail[0]['ngoDistrict'].', '.$getNgoDetail[0]['ngoCity']),
                                'photo' => base_url().''.$getIfUnknownAvailable[0]['Photo'],
                                'age' => $getIfUnknownAvailable[0]['Age'],
                                'gender' => ($getIfUnknownAvailable[0]['Gender'] == 'boy' ? 'Male' : 'Female'),
                                'registration_mobile' => (($getNgoDetail[0]['ngoRegistrationNumber'] != NULL) ? $getNgoDetail[0]['ngoRegistrationNumber'] : ''),
                                'mobile1' => (($getIfUnknownAvailable[0]['well1'] != NULL) ? $getIfUnknownAvailable[0]['well1'] : ''),
                                'mobile2' => (($getIfUnknownAvailable[0]['well2'] != NULL) ? $getIfUnknownAvailable[0]['well2'] : ''),
                                'mobile3' => (($getIfUnknownAvailable[0]['well3'] != NULL) ? $getIfUnknownAvailable[0]['well3'] : ''),
                                'id' => $getIfUnknownAvailable[0]['Application_no']
                            );   
                        }
                    }else{
                        $finalresponse = array(
                            'isUserFound' => $isUserFound,
                            'status' => 'unknown',
                            'isLapata' => $isLapata,
                            'personName' => strtoupper($personName),
                            'aadharNumber' => substr_replace((($getIfUnknownAvailable[0]['aadharNumber'] != '') ? $getIfUnknownAvailable[0]['aadharNumber'] : $aadhar),'xxxxxxxx',0,8),
                            'address' => strtoupper($address),
                            'photo' => ($userphoto != '' ? $userphoto : base_url().$getIfUnknownAvailable[0]['Photo']),
                            'age' => $age,
                            'gender' => strtolower($gender),
                            'id' => $getIfUnknownAvailable[0]['Application_no']
                        );
                    }
                    $insertdata = array(
                        'lapataId' => $lapataId,
                        'isLapata' => $isLapata,
                        'wantedIds' => implode(',',$wantedId),
                        'criminalIds' => implode(',',$criminalId),
                        'Idtype' => $_POST['idType'],
                        'IdNumber' => $idNumber,
                        'userId' => $_SESSION['user_id'],
                        'isFound' => $isUserFound,
                        'isMissing' => $isMissing,
                        'missingId' => implode(',',$missingId),
                        'personId' => $personId
                    );
                    $insert = $this->db->insert('searchpersonhistory',$insertdata);
                    $_SESSION['searchId'] = $this->db->insert_id();
                    echo json_encode($finalresponse);
                }else{
                    $insertdata = array(
                        'lapataId' => $lapataId,
                        'isLapata' => $isLapata,
                        'wantedIds' => implode(',',$wantedId),
                        'criminalIds' => implode(',',$criminalId),
                        'Idtype' => $_POST['idType'],
                        'IdNumber' => $idNumber,
                        'userId' => $_SESSION['user_id'],
                        'isFound' => $isUserFound,
                        'isMissing' => $isMissing,
                        'missingId' => implode(',',$missingId),
                        'personId' => $personId
                    );
                    $insert = $this->db->insert('searchpersonhistory',$insertdata);
                    if($insert)
                    {
                        if($isAadharCorrect == 1)
                        {
                            $_SESSION['searchId'] = $this->db->insert_id();
                            $isOnlyUser = 0;
                            if(!$isWanted && !$isLapata && !$isCriminal && !$isMissing)
                            {
                                $isOnlyUser = 1;
                            }
                            $response = array(
                                'personId' => $personId,
                                'isOnlyUser' => $isOnlyUser,
                                'status' => 'success',
                                'personName' => $personName,
                                'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                                'gender' => strtolower($gender),
                                'isWanted' => $isWanted,
                                'isLapata' => $isLapata,
                                'isCriminal' => $isCriminal,
                                'age' => $age,
                                'address' => $address,
                                'isAadharCorrect' => $isAadharCorrect,
                                'isDobCorrect' => 1,
                                'isGenderCorrect' => 1,
                                'message' => 'Person Found',
                                'isVisible' => $isVisible,
                                'isMissing' => $isMissing,
                                'isVerified' => $isVerified,
                                'isRegistered' => $isUserFound,
                                'image' => ($userphoto != '' ? $userphoto : base_url().'assets/img/noimage.jpg')
                            );
                            echo json_encode($response);   
                        }else{
                            $response = array(
                                'status' => 'incorrect',
                                'isAadharCorrect' => $isAadharCorrect,
                                'isDobCorrect' => 1,
                                'isGenderCorrect' => 1,
                            );
                            echo json_encode($response);   
                        }
                    }else{
                        $response = array(
                            'status' => 'error',
                            'message' => 'Something Went Wrong'
                        );
                        echo json_encode($response);
                    }
                }   
            }else{
                $getApplicationNumber = $this->db->query('select * from unknown_person where id='.$lapataId)->result_array();
                $notifyData = array(
                    'isLogin' => 1,
                    'policeId' => $_SESSION['police_id'],
                    'dateCreated' => date('Y-m-d H:i:s'),
                    'mobileNumber' => $_SESSION['loginmob'],
                    'searchedAppNumber' => $getApplicationNumber[0]['Application_no'],
                    'searchType' => 'Lapata',
                    'complainantUserType' => $getApplicationNumber[0]['uploaded_by'],
                    'complainantUserId' => ($getApplicationNumber[0]['uploaded_by'] == 'police' ? $getApplicationNumber[0]['policeId'] : ($getApplicationNumber[0]['uploaded_by'] == 'ngo' ? $getApplicationNumber[0]['ngoId'] : $getApplicationNumber[0]['userId'])),
                    'isIdentity' => 1,
                    'identityType' => 'pan',
                    'identityNumber' => $_POST['IdNumber']
                );
                $insert = $this->db->insert('searchnotification',$notifyData);
                if($getApplicationNumber[0]['uploaded_by'] == 'user')
                {
                    $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='user' and userId=".$getApplicationNumber[0]['userId']);
                    $query_res = $query->result_array();
                    
                    if(count($query_res) > 0)
                    {
                        foreach ($query_res as $query_res_data) {
                            $registrationIds[] =$query_res_data['token'];
                        }
                        
                        $url ="https://fcm.googleapis.com/fcm/send";
                        $fields=array(
                            "registration_ids"=>$registrationIds,
                            'data' => array("msg"=>"Khoji"),
                            'priority' => 'high',
                            "click_action"=>base_url(),
                            "notification"=>array(
                                "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - THANA -".$_SESSION['thanaName'].' has searched. Click here to check your notification.',
                                "title"=>"Khoji",
                            )   
                        );
                        $headers=array(
                            'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                            'Content-Type:application/json'
                        );
                        $ch=curl_init();
                        curl_setopt($ch,CURLOPT_URL,$url);
                        curl_setopt($ch,CURLOPT_POST,true);
                        curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                        curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                        curl_exec($ch);
                    }
                }else if($getApplicationNumber[0]['uploaded_by'] == 'police')
                {
                    $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='police' and userId=".$getApplicationNumber[0]['policeId']);
                    $query_res = $query->result_array();
                    
                    if(count($query_res) > 0)
                    {
                        foreach ($query_res as $query_res_data) {
                            $registrationIds[] =$query_res_data['token'];
                        }
                        
                        $url ="https://fcm.googleapis.com/fcm/send";
                        $fields=array(
                            "registration_ids"=>$registrationIds,
                            'data' => array("msg"=>"Khoji"),
                            'priority' => 'high',
                            "click_action"=>base_url(),
                            "notification"=>array(
                                "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - THANA -".$_SESSION['thanaName'].' has searched. Click here to check your notification.',
                                "title"=>"Khoji",
                            )   
                        );
                        $headers=array(
                            'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                            'Content-Type:application/json'
                        );
                        $ch=curl_init();
                        curl_setopt($ch,CURLOPT_URL,$url);
                        curl_setopt($ch,CURLOPT_POST,true);
                        curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                        curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                        curl_exec($ch);
                    }
                }else{
                    $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='ngo' and userId=".$getApplicationNumber[0]['ngoId']);
                    $query_res = $query->result_array();
                    
                    if(count($query_res) > 0)
                    {
                        foreach ($query_res as $query_res_data) {
                            $registrationIds[] =$query_res_data['token'];
                        }
                        
                        $url ="https://fcm.googleapis.com/fcm/send";
                        $fields=array(
                            "registration_ids"=>$registrationIds,
                            'data' => array("msg"=>"Khoji"),
                            'priority' => 'high',
                            "click_action"=>base_url(),
                            "notification"=>array(
                                "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - THANA -".$_SESSION['thanaName'].' has searched. Click here to check your notification.',
                                "title"=>"Khoji",
                            )   
                        );
                        $headers=array(
                            'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                            'Content-Type:application/json'
                        );
                        $ch=curl_init();
                        curl_setopt($ch,CURLOPT_URL,$url);
                        curl_setopt($ch,CURLOPT_POST,true);
                        curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                        curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                        curl_exec($ch);
                    }
                }
                $insertdata = array(
                    'lapataId' => $lapataId,
                    'isLapata' => $isLapata,
                    'wantedIds' => implode(',',$wantedId),
                    'criminalIds' => implode(',',$criminalId),
                    'Idtype' => $_POST['idType'],
                    'IdNumber' => $idNumber,
                    'userId' => $_SESSION['user_id'],
                    'isFound' => $isUserFound,
                    'isMissing' => $isMissing,
                    'missingId' => implode(',',$missingId),
                    'personId' => $personId
                );
                $insert = $this->db->insert('searchpersonhistory',$insertdata);
                if($insert)
                {
                    if($isAadharCorrect == 1)
                    {
                        $_SESSION['searchId'] = $this->db->insert_id();
                        $isOnlyUser = 0;
                        if(!$isWanted && !$isLapata && !$isCriminal && !$isMissing)
                        {
                            $isOnlyUser = 1;
                        }
                        $response = array(
                            'personId' => $personId,
                            'isOnlyUser' => $isOnlyUser,
                            'status' => 'success',
                            'personName' => $personName,
                            'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                            'gender' => strtolower($gender),
                            'isWanted' => $isWanted,
                            'isLapata' => $isLapata,
                            'isCriminal' => $isCriminal,
                            'age' => $age,
                            'address' => $address,
                            'isAadharCorrect' => $isAadharCorrect,
                            'isDobCorrect' => 1,
                            'isGenderCorrect' => 1,
                            'message' => 'Person Found',
                            'isVisible' => $isVisible,
                            'isMissing' => $isMissing,
                            'isVerified' => $isVerified,
                            'isRegistered' => $isUserFound,
                            'image' => ($userphoto != '' ? $userphoto : base_url().'assets/img/noimage.jpg')
                        );
                        echo json_encode($response);   
                    }else{
                        $response = array(
                            'status' => 'incorrect',
                            'isAadharCorrect' => $isAadharCorrect,
                            'isDobCorrect' => 1,
                            'isGenderCorrect' => 1,
                        );
                        echo json_encode($response);   
                    }
                }else{
                    $response = array(
                        'status' => 'error',
                        'message' => 'Something Went Wrong'
                    );
                    echo json_encode($response);
                }   
            }
        }
        if($_POST['idType'] == 'gold')
        {
            $idNumber = $_POST['IdNumber'];
            if(strlen($_POST['IdNumber']) != 6)
            {
                $response = array(
                    'status' => 'error',
                    'message' => 'Gold HUID number must be of 6 characters'
                );
                echo json_encode($response);
                return;
            }
            $personCount = 1;
            $this->db->where('goldHUIDNumber1', $_POST['IdNumber']);
            $this->db->or_where('goldHUIDNumber2', $_POST['IdNumber']);
            $this->db->or_where('goldHUIDNumber3', $_POST['IdNumber']);
            $getIfPersonAvailable = $this->db->get('user')->result_array();
            $userphoto = '';
            if(count($getIfPersonAvailable) > 0)
            {
                foreach($getIfPersonAvailable as $k=>$v)
                {
                    $personCount++;
                }
                $personId = $getIfPersonAvailable[0]['uid'];
                $isAadharCorrect = 1;
                $isVisible = $getIfPersonAvailable[0]['visibility'];
                $isVerified = 1;
                $isUserFound = 1;
                $personName = $getIfPersonAvailable[0]['aadharname'];
                $gender = $getIfPersonAvailable[0]['gender'];
                $aadhar = $getIfPersonAvailable[0]['aadhar_id'];
                $from=new DateTime(date('Y-m-d'));
                $to   = new DateTime($getIfPersonAvailable[0]['dob']);
                $age = ($from->diff($to)->y);
                $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                $userphoto = base_url().''.(($getIfPersonAvailable[0]['aadharphoto'] != NULL) ? $getIfPersonAvailable[0]['aadharphoto'] : $getIfPersonAvailable[0]['facematchphoto']);
            }
            $getMissingPerson = $this->db->query('select * from missingperson where goldId="'.$_POST['IdNumber'].'" and isFound !=1 and isFinalSubmitted = 1')->result_array();
            if(count($getMissingPerson) > 0)
            {
                $isVisible = 1;
                $isMissing = 1;
                if($isUserFound != 1)
                {
                    $personName = $getMissingPerson[0]['missingname'];
                    if($gender == '')
                    {
                        $gender = $getMissingPerson[0]['missinggender'];
                    }
                    $aadhar = $getMissingPerson[0]['missingaadhar'];
                    $from=new DateTime(date('Y-m-d'));
                    $to   = new DateTime($getMissingPerson[0]['missingdob']);
                    if($age == '')
                    {
                        $age = ($from->diff($to)->y);
                    }
                    $missingId = $getMissingPerson[0]['Id'];
                    if(count($getIfPersonAvailable) > 0)
                    {
                        $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                    }else{
                        $address = $getMissingPerson[0]['fathercity'].','.$getMissingPerson[0]['fatherstate'];
                    }
                    if(count($getIfPersonAvailable) == 0)
                    {
                        if($userphoto == '' || $userphoto == base_url())
                        {
                            $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : '');
                        }
                    }
                }
            }
            $this->db->like('goldHUID',$_POST['IdNumber'],'both');
            $getIfAlready = $this->db->get('unknownPersonGold')->result_array();
            if(count($getIfAlready) > 0)
            {   
                $getIfLapataAvailable = $this->db->query('select * from unknown_person where uploaded_by="user" and isFound=0 and id='.$getIfAlready[(count($getIfAlready) - 1)]['unknownId'].' and expiryDate >= "'.date('Y-m-d h:i:s').'" order by dateCreated desc')->result_array();
            }else{
                $getIfLapataAvailable = array();
            }
            if(count($getIfLapataAvailable) > 0)
            {
                $personCount = 1;
                $isAadharCorrect = 1;
                $isVisible = 1;
                $isLapata = 1;
                $lapataId = $getIfLapataAvailable[0]['id'];
                $isMissing = 0;
                $missingId = 0;
                if(!$isUserFound)
                {
                    $isVerified = 0;
                    $personName = $getIfLapataAvailable[0]['person_name'];
                    $gender = ($getIfLapataAvailable[0]['Gender'] == 'boy' ? 'MALE' : 'FEMALE');
                    $aadhar = $getIfLapataAvailable[0]['aadharNumber'];
                    $age = ($getIfLapataAvailable[0]['Age']);
                    $address = $getIfLapataAvailable[0]['city'].','.$getIfLapataAvailable[0]['state'];
                    $userphoto = base_url().''.(($getIfLapataAvailable[0]['Photo'] != NULL) ? $getIfLapataAvailable[0]['Photo'] : $userphoto);
                }
            }
            if($this->getSettings('generalNotification') == 'true')
            {
                if($personId != '')
                {
                    $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='user' and userId=".$personId);
                    $query_res = $query->result_array();
                    
                    if(count($query_res) > 0)
                    {
                        foreach ($query_res as $query_res_data) {
                            $registrationIds[] =$query_res_data['token'];
                        }
                        
                        $url ="https://fcm.googleapis.com/fcm/send";
                        $fields=array(
                            "registration_ids"=>$registrationIds,
                            'data' => array("msg"=>"Khoji"),
                            'priority' => 'high',
                            "click_action"=>base_url(),
                            "notification"=>array(
                                "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - THANA -".$_SESSION['thanaName'].' has searched. Click here to check your notification.',
                                "title"=>"Khoji",
                            )   
                        );
                        $headers=array(
                            'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                            'Content-Type:application/json'
                        );
                        $ch=curl_init();
                        curl_setopt($ch,CURLOPT_URL,$url);
                        curl_setopt($ch,CURLOPT_POST,true);
                        curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                        curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                        curl_exec($ch);
                    }
                }   
            }
            if($isLapata != 1)
            {
                $getIfUnknownGold = $this->db->query('select * from unknownPersonGold where goldHUID ="'.$_POST['IdNumber'].'" order by Id desc')->result_array();
                if(count($getIfUnknownGold) > 0)
                {
                    $id = array();
                    foreach($getIfUnknownGold as $k=>$v)
                    {
                        $getIfUnknownAvailable = $this->db->query('select * from unknown_person where uploaded_by !="user" and isFound=0 and id='.$v['unknownId'].' order by id desc')->result_array();      
                        if(count($getIfUnknownAvailable) > 0)
                        {
                            array_push($id,$getIfUnknownAvailable[0]['id']);
                            break;
                        }
                    }
                    if(count($id) > 0)
                    {
                        $getIfUnknownAvailable = $this->db->query('select * from unknown_person where id='.$id[0])->result_array();      
                    }else{
                        $getIfUnknownAvailable = array();    
                    }
                }else{
                    $getIfUnknownAvailable = array();
                }
                if(count($getIfUnknownAvailable) > 0)
                {
                    $getApplicationNumber = $this->db->query('select * from unknown_person where id='.$getIfUnknownAvailable[0]['id'])->result_array();
                    $notifyData = array(
                        'isLogin' => 1,
                        'policeId' => $_SESSION['police_id'],
                        'dateCreated' => date('Y-m-d H:i:s'),
                        'mobileNumber' => $_SESSION['loginmob'],
                        'searchedAppNumber' => $getApplicationNumber[0]['Application_no'],
                        'searchType' => 'Lapata',
                        'complainantUserType' => $getApplicationNumber[0]['uploaded_by'],
                        'complainantUserId' => ($getApplicationNumber[0]['uploaded_by'] == 'police' ? $getApplicationNumber[0]['policeId'] : ($getApplicationNumber[0]['uploaded_by'] == 'ngo' ? $getApplicationNumber[0]['ngoId'] : $getApplicationNumber[0]['userId'])),
                        'isIdentity' => 1,
                        'identityType' => 'gold',
                        'identityNumber' => $_POST['IdNumber']
                    );
                    $insert = $this->db->insert('searchnotification',$notifyData);
                    if($getApplicationNumber[0]['uploaded_by'] == 'user')
                    {
                        $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='user' and userId=".$getApplicationNumber[0]['userId']);
                        $query_res = $query->result_array();
                        
                        if(count($query_res) > 0)
                        {
                            foreach ($query_res as $query_res_data) {
                                $registrationIds[] =$query_res_data['token'];
                            }
                            
                            $url ="https://fcm.googleapis.com/fcm/send";
                            $fields=array(
                                "registration_ids"=>$registrationIds,
                                'data' => array("msg"=>"Khoji"),
                                'priority' => 'high',
                                "click_action"=>base_url(),
                                "notification"=>array(
                                    "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - THANA -".$_SESSION['thanaName'].' has searched. Click here to check your notification.',
                                    "title"=>"Khoji",
                                )   
                            );
                            $headers=array(
                                'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                                'Content-Type:application/json'
                            );
                            $ch=curl_init();
                            curl_setopt($ch,CURLOPT_URL,$url);
                            curl_setopt($ch,CURLOPT_POST,true);
                            curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                            curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                            curl_exec($ch);
                        }
                    }else if($getApplicationNumber[0]['uploaded_by'] == 'police')
                    {
                        $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='police' and userId=".$getApplicationNumber[0]['policeId']);
                        $query_res = $query->result_array();
                        
                        if(count($query_res) > 0)
                        {
                            foreach ($query_res as $query_res_data) {
                                $registrationIds[] =$query_res_data['token'];
                            }
                            
                            $url ="https://fcm.googleapis.com/fcm/send";
                            $fields=array(
                                "registration_ids"=>$registrationIds,
                                'data' => array("msg"=>"Khoji"),
                                'priority' => 'high',
                                "click_action"=>base_url(),
                                "notification"=>array(
                                    "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - THANA -".$_SESSION['thanaName'].' has searched. Click here to check your notification.',
                                    "title"=>"Khoji",
                                )   
                            );
                            $headers=array(
                                'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                                'Content-Type:application/json'
                            );
                            $ch=curl_init();
                            curl_setopt($ch,CURLOPT_URL,$url);
                            curl_setopt($ch,CURLOPT_POST,true);
                            curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                            curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                            curl_exec($ch);
                        }
                    }else{
                        $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='ngo' and userId=".$getApplicationNumber[0]['ngoId']);
                        $query_res = $query->result_array();
                        
                        if(count($query_res) > 0)
                        {
                            foreach ($query_res as $query_res_data) {
                                $registrationIds[] =$query_res_data['token'];
                            }
                            
                            $url ="https://fcm.googleapis.com/fcm/send";
                            $fields=array(
                                "registration_ids"=>$registrationIds,
                                'data' => array("msg"=>"Khoji"),
                                'priority' => 'high',
                                "click_action"=>base_url(),
                                "notification"=>array(
                                    "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - THANA -".$_SESSION['thanaName'].' has searched. Click here to check your notification.',
                                    "title"=>"Khoji",
                                )   
                            );
                            $headers=array(
                                'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                                'Content-Type:application/json'
                            );
                            $ch=curl_init();
                            curl_setopt($ch,CURLOPT_URL,$url);
                            curl_setopt($ch,CURLOPT_POST,true);
                            curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                            curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                            curl_exec($ch);
                        }
                    }
                    if($isUserFound != 1)
                    {
                        if($getIfUnknownAvailable[0]['uploaded_by'] == 'police')
                        {
                            $getPoliceDetail = $this->db->query('select * from police where police_id='.$getIfUnknownAvailable[0]['policeId'])->result_array();
                            $finalresponse = array(
                                'isUserFound' => $isUserFound,
                                'status' => 'unknown',
                                'isLapata' => $isLapata,
                                'personName' => strtoupper($getIfUnknownAvailable[0]['person_name']),
                                'aadharNumber' => substr_replace((($getIfUnknownAvailable[0]['aadharNumber'] != '') ? $getIfUnknownAvailable[0]['aadharNumber'] : $aadhar),'xxxxxxxx',0,8),
                                'type' => 'police',
                                'date' => date('d-m-Y h:i A',strtotime($getIfUnknownAvailable[0]['dateCreated'])),
                                'address' => strtoupper($getPoliceDetail[0]['thanaName'].' - '.$getPoliceDetail[0]['state'].', '.$getPoliceDetail[0]['district']),
                                'photo' => base_url().''.$getIfUnknownAvailable[0]['Photo'],
                                'age' => $getIfUnknownAvailable[0]['Age'],
                                'gender' => ($getIfUnknownAvailable[0]['Gender'] == 'boy' ? 'Male' : 'Female'),
                                'id' => $getIfUnknownAvailable[0]['Application_no'],
                                'registration_mobile' => (($getPoliceDetail[0]['registration_mobile'] != NULL) ? $getPoliceDetail[0]['registration_mobile'] : ''),
                                'mobile1' => (($getIfUnknownAvailable[0]['well1'] != NULL) ? $getIfUnknownAvailable[0]['well1'] : ''),
                                'mobile2' => (($getIfUnknownAvailable[0]['well2'] != NULL) ? $getIfUnknownAvailable[0]['well2'] : ''),
                                'mobile3' => (($getIfUnknownAvailable[0]['well3'] != NULL) ? $getIfUnknownAvailable[0]['well3'] : ''),
                            );   
                        }else{
                            $getNgoDetail = $this->db->query('select * from ngo where Id='.$getIfUnknownAvailable[0]['ngoId'])->result_array();
                            $finalresponse = array(
                                'status' => 'unknown',
                                'isLapata' => $isLapata,
                                'personName' => strtoupper($getIfUnknownAvailable[0]['person_name']),
                                'isUserFound' => $isUserFound,
                                'aadharNumber' => substr_replace((($getIfUnknownAvailable[0]['aadharNumber'] != '') ? $getIfUnknownAvailable[0]['aadharNumber'] : $aadhar),'xxxxxxxx',0,8),
                                'type' => 'ngo',
                                'date' => date('d-m-Y h:i A',strtotime($getIfUnknownAvailable[0]['dateCreated'])),
                                'address' => strtoupper($getNgoDetail[0]['ngoName'].' - '.$getNgoDetail[0]['ngoState'].', '.$getNgoDetail[0]['ngoDistrict'].', '.$getNgoDetail[0]['ngoCity']),
                                'photo' => base_url().''.$getIfUnknownAvailable[0]['Photo'],
                                'age' => $getIfUnknownAvailable[0]['Age'],
                                'gender' => ($getIfUnknownAvailable[0]['Gender'] == 'boy' ? 'Male' : 'Female'),
                                'registration_mobile' => (($getNgoDetail[0]['ngoRegistrationNumber'] != NULL) ? $getNgoDetail[0]['ngoRegistrationNumber'] : ''),
                                'mobile1' => (($getIfUnknownAvailable[0]['well1'] != NULL) ? $getIfUnknownAvailable[0]['well1'] : ''),
                                'mobile2' => (($getIfUnknownAvailable[0]['well2'] != NULL) ? $getIfUnknownAvailable[0]['well2'] : ''),
                                'mobile3' => (($getIfUnknownAvailable[0]['well3'] != NULL) ? $getIfUnknownAvailable[0]['well3'] : ''),
                                'id' => $getIfUnknownAvailable[0]['Application_no']
                            );   
                        }
                    }else{
                        $finalresponse = array(
                            'isUserFound' => $isUserFound,
                            'status' => 'unknown',
                            'isLapata' => $isLapata,
                            'personName' => strtoupper($personName),
                            'aadharNumber' => substr_replace((($getIfUnknownAvailable[0]['aadharNumber'] != '') ? $getIfUnknownAvailable[0]['aadharNumber'] : $aadhar),'xxxxxxxx',0,8),
                            'address' => strtoupper($address),
                            'photo' => ($userphoto != '' ? $userphoto : base_url().$getIfUnknownAvailable[0]['Photo']),
                            'age' => $age,
                            'gender' => strtolower($gender),
                            'id' => $getIfUnknownAvailable[0]['Application_no']
                        );
                    }
                    $insertdata = array(
                        'lapataId' => $lapataId,
                        'isLapata' => $isLapata,
                        'wantedIds' => implode(',',$wantedId),
                        'criminalIds' => implode(',',$criminalId),
                        'Idtype' => $_POST['idType'],
                        'IdNumber' => $idNumber,
                        'userId' => $_SESSION['user_id'],
                        'isFound' => $isUserFound,
                        'isMissing' => $isMissing,
                        'missingId' => implode(',',$missingId),
                        'personId' => $personId
                    );
                    $insert = $this->db->insert('searchpersonhistory',$insertdata);
                    $_SESSION['searchId'] = $this->db->insert_id();
                    echo json_encode($finalresponse);
                }else{
                    $insertdata = array(
                        'lapataId' => $lapataId,
                        'isLapata' => $isLapata,
                        'wantedIds' => implode(',',$wantedId),
                        'criminalIds' => implode(',',$criminalId),
                        'Idtype' => $_POST['idType'],
                        'IdNumber' => $idNumber,
                        'userId' => $_SESSION['user_id'],
                        'isFound' => $isUserFound,
                        'isMissing' => $isMissing,
                        'missingId' => implode(',',$missingId),
                        'personId' => $personId
                    );
                    $insert = $this->db->insert('searchpersonhistory',$insertdata);
                    if($insert)
                    {
                        if($isAadharCorrect == 1)
                        {
                            $_SESSION['searchId'] = $this->db->insert_id();
                            $isOnlyUser = 0;
                            if(!$isWanted && !$isLapata && !$isCriminal && !$isMissing)
                            {
                                $isOnlyUser = 1;
                            }
                            $response = array(
                                'personCount' => $personCount,
                                'personId' => $personId,
                                'isOnlyUser' => $isOnlyUser,
                                'status' => 'success',
                                'personName' => $personName,
                                'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                                'gender' => strtolower($gender),
                                'isWanted' => $isWanted,
                                'isLapata' => $isLapata,
                                'isCriminal' => $isCriminal,
                                'age' => $age,
                                'address' => $address,
                                'isAadharCorrect' => $isAadharCorrect,
                                'isDobCorrect' => 1,
                                'isGenderCorrect' => 1,
                                'message' => 'Person Found',
                                'isVisible' => $isVisible,
                                'isMissing' => $isMissing,
                                'isVerified' => $isVerified,
                                'isRegistered' => $isUserFound,
                                'image' => ($userphoto != '' ? $userphoto : base_url().'assets/img/noimage.jpg')
                            );
                            echo json_encode($response);   
                        }else{
                            $response = array(
                                'status' => 'incorrect',
                                'isAadharCorrect' => $isAadharCorrect,
                                'isDobCorrect' => 1,
                                'isGenderCorrect' => 1,
                            );
                            echo json_encode($response);   
                        }
                    }else{
                        $response = array(
                            'status' => 'error',
                            'message' => 'Something Went Wrong'
                        );
                        echo json_encode($response);
                    }
                }   
            }else{
                $getApplicationNumber = $this->db->query('select * from unknown_person where id='.$lapataId)->result_array();
                $notifyData = array(
                    'isLogin' => 1,
                    'policeId' => $_SESSION['police_id'],
                    'dateCreated' => date('Y-m-d H:i:s'),
                    'mobileNumber' => $_SESSION['loginmob'],
                    'searchedAppNumber' => $getApplicationNumber[0]['Application_no'],
                    'searchType' => 'Lapata',
                    'complainantUserType' => $getApplicationNumber[0]['uploaded_by'],
                    'complainantUserId' => ($getApplicationNumber[0]['uploaded_by'] == 'police' ? $getApplicationNumber[0]['policeId'] : ($getApplicationNumber[0]['uploaded_by'] == 'ngo' ? $getApplicationNumber[0]['ngoId'] : $getApplicationNumber[0]['userId'])),
                    'isIdentity' => 1,
                    'identityType' => 'gold',
                    'identityNumber' => $_POST['IdNumber']
                );
                $insert = $this->db->insert('searchnotification',$notifyData);
                if($getApplicationNumber[0]['uploaded_by'] == 'user')
                {
                    $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='user' and userId=".$getApplicationNumber[0]['userId']);
                    $query_res = $query->result_array();
                    
                    if(count($query_res) > 0)
                    {
                        foreach ($query_res as $query_res_data) {
                            $registrationIds[] =$query_res_data['token'];
                        }
                        
                        $url ="https://fcm.googleapis.com/fcm/send";
                        $fields=array(
                            "registration_ids"=>$registrationIds,
                            'data' => array("msg"=>"Khoji"),
                            'priority' => 'high',
                            "click_action"=>base_url(),
                            "notification"=>array(
                                "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - THANA -".$_SESSION['thanaName'].' has searched. Click here to check your notification.',
                                "title"=>"Khoji",
                            )   
                        );
                        $headers=array(
                            'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                            'Content-Type:application/json'
                        );
                        $ch=curl_init();
                        curl_setopt($ch,CURLOPT_URL,$url);
                        curl_setopt($ch,CURLOPT_POST,true);
                        curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                        curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                        curl_exec($ch);
                    }
                }else if($getApplicationNumber[0]['uploaded_by'] == 'police')
                {
                    $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='police' and userId=".$getApplicationNumber[0]['policeId']);
                    $query_res = $query->result_array();
                    
                    if(count($query_res) > 0)
                    {
                        foreach ($query_res as $query_res_data) {
                            $registrationIds[] =$query_res_data['token'];
                        }
                        
                        $url ="https://fcm.googleapis.com/fcm/send";
                        $fields=array(
                            "registration_ids"=>$registrationIds,
                            'data' => array("msg"=>"Khoji"),
                            'priority' => 'high',
                            "click_action"=>base_url(),
                            "notification"=>array(
                                "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - THANA -".$_SESSION['thanaName'].' has searched. Click here to check your notification.',
                                "title"=>"Khoji",
                            )   
                        );
                        $headers=array(
                            'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                            'Content-Type:application/json'
                        );
                        $ch=curl_init();
                        curl_setopt($ch,CURLOPT_URL,$url);
                        curl_setopt($ch,CURLOPT_POST,true);
                        curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                        curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                        curl_exec($ch);
                    }
                }else{
                    $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='ngo' and userId=".$getApplicationNumber[0]['ngoId']);
                    $query_res = $query->result_array();
                    
                    if(count($query_res) > 0)
                    {
                        foreach ($query_res as $query_res_data) {
                            $registrationIds[] =$query_res_data['token'];
                        }
                        
                        $url ="https://fcm.googleapis.com/fcm/send";
                        $fields=array(
                            "registration_ids"=>$registrationIds,
                            'data' => array("msg"=>"Khoji"),
                            'priority' => 'high',
                            "click_action"=>base_url(),
                            "notification"=>array(
                                "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - THANA -".$_SESSION['thanaName'].' has searched. Click here to check your notification.',
                                "title"=>"Khoji",
                            )   
                        );
                        $headers=array(
                            'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                            'Content-Type:application/json'
                        );
                        $ch=curl_init();
                        curl_setopt($ch,CURLOPT_URL,$url);
                        curl_setopt($ch,CURLOPT_POST,true);
                        curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                        curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                        curl_exec($ch);
                    }
                }
                $insertdata = array(
                    'lapataId' => $lapataId,
                    'isLapata' => $isLapata,
                    'wantedIds' => implode(',',$wantedId),
                    'criminalIds' => implode(',',$criminalId),
                    'Idtype' => $_POST['idType'],
                    'IdNumber' => $idNumber,
                    'userId' => $_SESSION['user_id'],
                    'isFound' => $isUserFound,
                    'isMissing' => $isMissing,
                    'missingId' => implode(',',$missingId),
                    'personId' => $personId
                );
                $insert = $this->db->insert('searchpersonhistory',$insertdata);
                if($insert)
                {
                    if($isAadharCorrect == 1)
                    {
                        $_SESSION['searchId'] = $this->db->insert_id();
                        $isOnlyUser = 0;
                        if(!$isWanted && !$isLapata && !$isCriminal && !$isMissing)
                        {
                            $isOnlyUser = 1;
                        }
                        $response = array(
                            'personId' => $personId,
                            'isOnlyUser' => $isOnlyUser,
                            'status' => 'success',
                            'personName' => $personName,
                            'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                            'gender' => strtolower($gender),
                            'isWanted' => $isWanted,
                            'isLapata' => $isLapata,
                            'isCriminal' => $isCriminal,
                            'age' => $age,
                            'address' => $address,
                            'isAadharCorrect' => $isAadharCorrect,
                            'isDobCorrect' => 1,
                            'isGenderCorrect' => 1,
                            'message' => 'Person Found',
                            'isVisible' => $isVisible,
                            'isMissing' => $isMissing,
                            'isVerified' => $isVerified,
                            'isRegistered' => $isUserFound,
                            'image' => ($userphoto != '' ? $userphoto : base_url().'assets/img/noimage.jpg')
                        );
                        echo json_encode($response);   
                    }else{
                        $response = array(
                            'status' => 'incorrect',
                            'isAadharCorrect' => $isAadharCorrect,
                            'isDobCorrect' => 1,
                            'isGenderCorrect' => 1,
                        );
                        echo json_encode($response);   
                    }
                }else{
                    $response = array(
                        'status' => 'error',
                        'message' => 'Something Went Wrong'
                    );
                    echo json_encode($response);
                }   
            }
        }
        if($_POST['idType'] == 'vehicle')
        {
            $idNumber = $_POST['IdNumber'];
            $personCount = 1;
            $this->db->where('vehicleNumber1', $_POST['IdNumber']);
            $this->db->or_where('vehicleNumber2', $_POST['IdNumber']);
            $this->db->or_where('vehicleNumber3', $_POST['IdNumber']);
            $getIfPersonAvailable = $this->db->get('user')->result_array();
            $userphoto = '';
            if(count($getIfPersonAvailable) > 0)
            {
                foreach($getIfPersonAvailable as $k=>$v)
                {
                    $personCount++;
                }
                $personId = $getIfPersonAvailable[0]['uid'];
                $isAadharCorrect = 1;
                $isVisible = $getIfPersonAvailable[0]['visibility'];
                $isVerified = 1;
                $isUserFound = 1;
                $personName = $getIfPersonAvailable[0]['aadharname'];
                $gender = $getIfPersonAvailable[0]['gender'];
                $aadhar = $getIfPersonAvailable[0]['aadhar_id'];
                $from=new DateTime(date('Y-m-d'));
                $to   = new DateTime($getIfPersonAvailable[0]['dob']);
                $age = ($from->diff($to)->y);
                $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                $userphoto = base_url().''.(($getIfPersonAvailable[0]['aadharphoto'] != NULL) ? $getIfPersonAvailable[0]['aadharphoto'] : $getIfPersonAvailable[0]['facematchphoto']);
            }
            $getMissingPerson = $this->db->query('select * from missingperson where vehicleNumber like "%'.$_POST['IdNumber'].'%" and isFound !=1 and isFinalSubmitted = 1')->result_array();
            if(count($getMissingPerson) > 0)
            {
                $isVisible = 1;
                $isMissing = 1;
                $missingId = $getMissingPerson[0]['Id'];
                if($isUserFound != 1)
                {
                    $personName = $getMissingPerson[0]['missingname'];
                    if($gender == '')
                    {
                        $gender = $getMissingPerson[0]['missinggender'];
                    }
                    $aadhar = $getMissingPerson[0]['missingaadhar'];
                    $from=new DateTime(date('Y-m-d'));
                    $to   = new DateTime($getMissingPerson[0]['missingdob']);
                    if($age == '')
                    {
                        $age = ($from->diff($to)->y);
                    }
                    if(count($getIfPersonAvailable) > 0)
                    {
                        $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                    }else{
                        $address = $getMissingPerson[0]['fathercity'].','.$getMissingPerson[0]['fatherstate'];
                    }
                    if(count($getIfPersonAvailable) == 0)
                    {
                        if($userphoto == '' || $userphoto == base_url())
                        {
                            $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : '');
                        }
                    }
                }
            }
            $getIfLapataAvailable = $this->db->query('select * from unknown_person where uploaded_by = "user" and isFound=0 and vehicle_no like "%'.$_POST['IdNumber'].'%" and expiryDate >= "'.date('Y-m-d h:i:s').'" order by id desc')->result_array();   
            if(count($getIfLapataAvailable) > 0)
            {
                $personCount = 1;
                $isAadharCorrect = 1;
                $isVisible = 1;
                $isLapata = 1;
                $lapataId = $getIfLapataAvailable[0]['id'];
                $isMissing = 0;
                $missingId = 0;
                if(!$isUserFound)
                {
                    $isVerified = 0;
                    $personName = $getIfLapataAvailable[0]['person_name'];
                    $gender = ($getIfLapataAvailable[0]['Gender'] == 'boy' ? 'MALE' : 'FEMALE');
                    $aadhar = $getIfLapataAvailable[0]['aadharNumber'];
                    $age = ($getIfLapataAvailable[0]['Age']);
                    $address = $getIfLapataAvailable[0]['city'].','.$getIfLapataAvailable[0]['state'];
                    $userphoto = base_url().''.(($getIfLapataAvailable[0]['Photo'] != NULL) ? $getIfLapataAvailable[0]['Photo'] : $userphoto);
                }
            }
            if($this->getSettings('generalNotification') == 'true')
            {
                if($personId != '')
                {
                    $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='user' and userId=".$personId);
                    $query_res = $query->result_array();
                    
                    if(count($query_res) > 0)
                    {
                        foreach ($query_res as $query_res_data) {
                            $registrationIds[] =$query_res_data['token'];
                        }
                        
                        $url ="https://fcm.googleapis.com/fcm/send";
                        $fields=array(
                            "registration_ids"=>$registrationIds,
                            'data' => array("msg"=>"Khoji"),
                            'priority' => 'high',
                            "click_action"=>base_url(),
                            "notification"=>array(
                                "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - THANA -".$_SESSION['thanaName'].' has searched. Click here to check your notification.',
                                "title"=>"Khoji",
                            )   
                        );
                        $headers=array(
                            'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                            'Content-Type:application/json'
                        );
                        $ch=curl_init();
                        curl_setopt($ch,CURLOPT_URL,$url);
                        curl_setopt($ch,CURLOPT_POST,true);
                        curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                        curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                        curl_exec($ch);
                    }
                }   
            }
            if($isLapata != 1)
            {
                $getIfUnknownAvailable = $this->db->query('select * from unknown_person where uploaded_by !="user" and isFound=0 and vehicle_no="'.$_POST['IdNumber'].'" order by id desc')->result_array();
                if(count($getIfUnknownAvailable) > 0)
                {
                    $getApplicationNumber = $this->db->query('select * from unknown_person where id='.$getIfUnknownAvailable[0]['id'])->result_array();
                    $notifyData = array(
                        'isLogin' => 1,
                        'policeId' => $_SESSION['police_id'],
                        'dateCreated' => date('Y-m-d H:i:s'),
                        'mobileNumber' => $_SESSION['loginmob'],
                        'searchedAppNumber' => $getApplicationNumber[0]['Application_no'],
                        'searchType' => 'Lapata',
                        'complainantUserType' => $getApplicationNumber[0]['uploaded_by'],
                        'complainantUserId' => ($getApplicationNumber[0]['uploaded_by'] == 'police' ? $getApplicationNumber[0]['policeId'] : ($getApplicationNumber[0]['uploaded_by'] == 'ngo' ? $getApplicationNumber[0]['ngoId'] : $getApplicationNumber[0]['userId'])),
                        'isIdentity' => 1,
                        'identityType' => 'vehicle',
                        'identityNumber' => $_POST['IdNumber']
                    );
                    $insert = $this->db->insert('searchnotification',$notifyData);
                    if($getApplicationNumber[0]['uploaded_by'] == 'user')
                    {
                        $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='user' and userId=".$getApplicationNumber[0]['userId']);
                        $query_res = $query->result_array();
                        
                        if(count($query_res) > 0)
                        {
                            foreach ($query_res as $query_res_data) {
                                $registrationIds[] =$query_res_data['token'];
                            }
                            
                            $url ="https://fcm.googleapis.com/fcm/send";
                            $fields=array(
                                "registration_ids"=>$registrationIds,
                                'data' => array("msg"=>"Khoji"),
                                'priority' => 'high',
                                "click_action"=>base_url(),
                                "notification"=>array(
                                    "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - THANA -".$_SESSION['thanaName'].' has searched. Click here to check your notification.',
                                    "title"=>"Khoji",
                                )   
                            );
                            $headers=array(
                                'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                                'Content-Type:application/json'
                            );
                            $ch=curl_init();
                            curl_setopt($ch,CURLOPT_URL,$url);
                            curl_setopt($ch,CURLOPT_POST,true);
                            curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                            curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                            curl_exec($ch);
                        }
                    }else if($getApplicationNumber[0]['uploaded_by'] == 'police')
                    {
                        $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='police' and userId=".$getApplicationNumber[0]['policeId']);
                        $query_res = $query->result_array();
                        
                        if(count($query_res) > 0)
                        {
                            foreach ($query_res as $query_res_data) {
                                $registrationIds[] =$query_res_data['token'];
                            }
                            
                            $url ="https://fcm.googleapis.com/fcm/send";
                            $fields=array(
                                "registration_ids"=>$registrationIds,
                                'data' => array("msg"=>"Khoji"),
                                'priority' => 'high',
                                "click_action"=>base_url(),
                                "notification"=>array(
                                    "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - THANA -".$_SESSION['thanaName'].' has searched. Click here to check your notification.',
                                    "title"=>"Khoji",
                                )   
                            );
                            $headers=array(
                                'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                                'Content-Type:application/json'
                            );
                            $ch=curl_init();
                            curl_setopt($ch,CURLOPT_URL,$url);
                            curl_setopt($ch,CURLOPT_POST,true);
                            curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                            curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                            curl_exec($ch);
                        }
                    }else{
                        $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='ngo' and userId=".$getApplicationNumber[0]['ngoId']);
                        $query_res = $query->result_array();
                        
                        if(count($query_res) > 0)
                        {
                            foreach ($query_res as $query_res_data) {
                                $registrationIds[] =$query_res_data['token'];
                            }
                            
                            $url ="https://fcm.googleapis.com/fcm/send";
                            $fields=array(
                                "registration_ids"=>$registrationIds,
                                'data' => array("msg"=>"Khoji"),
                                'priority' => 'high',
                                "click_action"=>base_url(),
                                "notification"=>array(
                                    "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - THANA -".$_SESSION['thanaName'].' has searched. Click here to check your notification.',
                                    "title"=>"Khoji",
                                )   
                            );
                            $headers=array(
                                'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                                'Content-Type:application/json'
                            );
                            $ch=curl_init();
                            curl_setopt($ch,CURLOPT_URL,$url);
                            curl_setopt($ch,CURLOPT_POST,true);
                            curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                            curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                            curl_exec($ch);
                        }
                    }
                    if($isUserFound != 1)
                    {
                        if($getIfUnknownAvailable[0]['uploaded_by'] == 'police')
                        {
                            $getPoliceDetail = $this->db->query('select * from police where police_id='.$getIfUnknownAvailable[0]['policeId'])->result_array();
                            $finalresponse = array(
                                'isUserFound' => $isUserFound,
                                'status' => 'unknown',
                                'isLapata' => $isLapata,
                                'personName' => strtoupper($getIfUnknownAvailable[0]['person_name']),
                                'aadharNumber' => substr_replace((($getIfUnknownAvailable[0]['aadharNumber'] != '') ? $getIfUnknownAvailable[0]['aadharNumber'] : $aadhar),'xxxxxxxx',0,8),
                                'type' => 'police',
                                'date' => date('d-m-Y h:i A',strtotime($getIfUnknownAvailable[0]['dateCreated'])),
                                'address' => strtoupper($getPoliceDetail[0]['thanaName'].' - '.$getPoliceDetail[0]['state'].', '.$getPoliceDetail[0]['district']),
                                'photo' => base_url().''.$getIfUnknownAvailable[0]['Photo'],
                                'age' => $getIfUnknownAvailable[0]['Age'],
                                'gender' => ($getIfUnknownAvailable[0]['Gender'] == 'boy' ? 'Male' : 'Female'),
                                'id' => $getIfUnknownAvailable[0]['Application_no'],
                                'registration_mobile' => (($getPoliceDetail[0]['registration_mobile'] != NULL) ? $getPoliceDetail[0]['registration_mobile'] : ''),
                                'mobile1' => (($getIfUnknownAvailable[0]['well1'] != NULL) ? $getIfUnknownAvailable[0]['well1'] : ''),
                                'mobile2' => (($getIfUnknownAvailable[0]['well2'] != NULL) ? $getIfUnknownAvailable[0]['well2'] : ''),
                                'mobile3' => (($getIfUnknownAvailable[0]['well3'] != NULL) ? $getIfUnknownAvailable[0]['well3'] : ''),
                            );   
                        }else{
                            $getNgoDetail = $this->db->query('select * from ngo where Id='.$getIfUnknownAvailable[0]['ngoId'])->result_array();
                            $finalresponse = array(
                                'status' => 'unknown',
                                'isLapata' => $isLapata,
                                'personName' => strtoupper($getIfUnknownAvailable[0]['person_name']),
                                'isUserFound' => $isUserFound,
                                'aadharNumber' => substr_replace((($getIfUnknownAvailable[0]['aadharNumber'] != '') ? $getIfUnknownAvailable[0]['aadharNumber'] : $aadhar),'xxxxxxxx',0,8),
                                'type' => 'ngo',
                                'date' => date('d-m-Y h:i A',strtotime($getIfUnknownAvailable[0]['dateCreated'])),
                                'address' => strtoupper($getNgoDetail[0]['ngoName'].' - '.$getNgoDetail[0]['ngoState'].', '.$getNgoDetail[0]['ngoDistrict'].', '.$getNgoDetail[0]['ngoCity']),
                                'photo' => base_url().''.$getIfUnknownAvailable[0]['Photo'],
                                'age' => $getIfUnknownAvailable[0]['Age'],
                                'gender' => ($getIfUnknownAvailable[0]['Gender'] == 'boy' ? 'Male' : 'Female'),
                                'registration_mobile' => (($getNgoDetail[0]['ngoRegistrationNumber'] != NULL) ? $getNgoDetail[0]['ngoRegistrationNumber'] : ''),
                                'mobile1' => (($getIfUnknownAvailable[0]['well1'] != NULL) ? $getIfUnknownAvailable[0]['well1'] : ''),
                                'mobile2' => (($getIfUnknownAvailable[0]['well2'] != NULL) ? $getIfUnknownAvailable[0]['well2'] : ''),
                                'mobile3' => (($getIfUnknownAvailable[0]['well3'] != NULL) ? $getIfUnknownAvailable[0]['well3'] : ''),
                                'id' => $getIfUnknownAvailable[0]['Application_no']
                            );   
                        }
                    }else{
                        $finalresponse = array(
                            'isUserFound' => $isUserFound,
                            'status' => 'unknown',
                            'isLapata' => $isLapata,
                            'personName' => strtoupper($personName),
                            'aadharNumber' => substr_replace((($getIfUnknownAvailable[0]['aadharNumber'] != '') ? $getIfUnknownAvailable[0]['aadharNumber'] : $aadhar),'xxxxxxxx',0,8),
                            'address' => strtoupper($address),
                            'photo' => ($userphoto != '' ? $userphoto : base_url().$getIfUnknownAvailable[0]['Photo']),
                            'age' => $age,
                            'gender' => strtolower($gender),
                            'id' => $getIfUnknownAvailable[0]['Application_no']
                        );
                    }
                    $insertdata = array(
                        'lapataId' => $lapataId,
                        'isLapata' => $isLapata,
                        'wantedIds' => implode(',',$wantedId),
                        'criminalIds' => implode(',',$criminalId),
                        'Idtype' => $_POST['idType'],
                        'IdNumber' => $idNumber,
                        'userId' => $_SESSION['user_id'],
                        'isFound' => $isUserFound,
                        'isMissing' => $isMissing,
                        'missingId' => implode(',',$missingId),
                        'personId' => $personId
                    );
                    $insert = $this->db->insert('searchpersonhistory',$insertdata);
                    $_SESSION['searchId'] = $this->db->insert_id();
                    echo json_encode($finalresponse);
                }else{
                    $insertdata = array(
                        'lapataId' => $lapataId,
                        'isLapata' => $isLapata,
                        'wantedIds' => implode(',',$wantedId),
                        'criminalIds' => implode(',',$criminalId),
                        'Idtype' => $_POST['idType'],
                        'IdNumber' => $idNumber,
                        'userId' => $_SESSION['user_id'],
                        'isFound' => $isUserFound,
                        'isMissing' => $isMissing,
                        'missingId' => implode(',',$missingId),
                        'personId' => $personId
                    );
                    $insert = $this->db->insert('searchpersonhistory',$insertdata);
                    if($insert)
                    {
                        if($isAadharCorrect == 1)
                        {
                            $_SESSION['searchId'] = $this->db->insert_id();
                            $isOnlyUser = 0;
                            if(!$isWanted && !$isLapata && !$isCriminal && !$isMissing)
                            {
                                $isOnlyUser = 1;
                            }
                            $response = array(
                                'personCount' => $personCount,
                                'personId' => $personId,
                                'isOnlyUser' => $isOnlyUser,
                                'status' => 'success',
                                'personName' => $personName,
                                'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                                'gender' => strtolower($gender),
                                'isWanted' => $isWanted,
                                'isLapata' => $isLapata,
                                'isCriminal' => $isCriminal,
                                'age' => $age,
                                'address' => $address,
                                'isAadharCorrect' => $isAadharCorrect,
                                'isDobCorrect' => 1,
                                'isGenderCorrect' => 1,
                                'message' => 'Person Found',
                                'isVisible' => $isVisible,
                                'isMissing' => $isMissing,
                                'isVerified' => $isVerified,
                                'isRegistered' => $isUserFound,
                                'image' => ($userphoto != '' ? $userphoto : base_url().'assets/img/noimage.jpg')
                            );
                            echo json_encode($response);   
                        }else{
                            $response = array(
                                'status' => 'incorrect',
                                'isAadharCorrect' => $isAadharCorrect,
                                'isDobCorrect' => 1,
                                'isGenderCorrect' => 1,
                            );
                            echo json_encode($response);   
                        }
                    }else{
                        $response = array(
                            'status' => 'error',
                            'message' => 'Something Went Wrong'
                        );
                        echo json_encode($response);
                    }
                }   
            }else{
                $getApplicationNumber = $this->db->query('select * from unknown_person where id='.$lapataId)->result_array();
                $notifyData = array(
                    'isLogin' => 1,
                    'policeId' => $_SESSION['police_id'],
                    'dateCreated' => date('Y-m-d H:i:s'),
                    'mobileNumber' => $_SESSION['loginmob'],
                    'searchedAppNumber' => $getApplicationNumber[0]['Application_no'],
                    'searchType' => 'Lapata',
                    'complainantUserType' => $getApplicationNumber[0]['uploaded_by'],
                    'complainantUserId' => ($getApplicationNumber[0]['uploaded_by'] == 'police' ? $getApplicationNumber[0]['policeId'] : ($getApplicationNumber[0]['uploaded_by'] == 'ngo' ? $getApplicationNumber[0]['ngoId'] : $getApplicationNumber[0]['userId'])),
                    'isIdentity' => 1,
                    'identityType' => 'vehicle',
                    'identityNumber' => $_POST['IdNumber']
                );
                $insert = $this->db->insert('searchnotification',$notifyData);
                if($getApplicationNumber[0]['uploaded_by'] == 'user')
                {
                    $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='user' and userId=".$getApplicationNumber[0]['userId']);
                    $query_res = $query->result_array();
                    
                    if(count($query_res) > 0)
                    {
                        foreach ($query_res as $query_res_data) {
                            $registrationIds[] =$query_res_data['token'];
                        }
                        
                        $url ="https://fcm.googleapis.com/fcm/send";
                        $fields=array(
                            "registration_ids"=>$registrationIds,
                            'data' => array("msg"=>"Khoji"),
                            'priority' => 'high',
                            "click_action"=>base_url(),
                            "notification"=>array(
                                "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - THANA -".$_SESSION['thanaName'].' has searched. Click here to check your notification.',
                                "title"=>"Khoji",
                            )   
                        );
                        $headers=array(
                            'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                            'Content-Type:application/json'
                        );
                        $ch=curl_init();
                        curl_setopt($ch,CURLOPT_URL,$url);
                        curl_setopt($ch,CURLOPT_POST,true);
                        curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                        curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                        curl_exec($ch);
                    }
                }else if($getApplicationNumber[0]['uploaded_by'] == 'police')
                {
                    $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='police' and userId=".$getApplicationNumber[0]['policeId']);
                    $query_res = $query->result_array();
                    
                    if(count($query_res) > 0)
                    {
                        foreach ($query_res as $query_res_data) {
                            $registrationIds[] =$query_res_data['token'];
                        }
                        
                        $url ="https://fcm.googleapis.com/fcm/send";
                        $fields=array(
                            "registration_ids"=>$registrationIds,
                            'data' => array("msg"=>"Khoji"),
                            'priority' => 'high',
                            "click_action"=>base_url(),
                            "notification"=>array(
                                "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - THANA -".$_SESSION['thanaName'].' has searched. Click here to check your notification.',
                                "title"=>"Khoji",
                            )   
                        );
                        $headers=array(
                            'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                            'Content-Type:application/json'
                        );
                        $ch=curl_init();
                        curl_setopt($ch,CURLOPT_URL,$url);
                        curl_setopt($ch,CURLOPT_POST,true);
                        curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                        curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                        curl_exec($ch);
                    }
                }else{
                    $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='ngo' and userId=".$getApplicationNumber[0]['ngoId']);
                    $query_res = $query->result_array();
                    
                    if(count($query_res) > 0)
                    {
                        foreach ($query_res as $query_res_data) {
                            $registrationIds[] =$query_res_data['token'];
                        }
                        
                        $url ="https://fcm.googleapis.com/fcm/send";
                        $fields=array(
                            "registration_ids"=>$registrationIds,
                            'data' => array("msg"=>"Khoji"),
                            'priority' => 'high',
                            "click_action"=>base_url(),
                            "notification"=>array(
                                "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - THANA -".$_SESSION['thanaName'].' has searched. Click here to check your notification.',
                                "title"=>"Khoji",
                            )   
                        );
                        $headers=array(
                            'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                            'Content-Type:application/json'
                        );
                        $ch=curl_init();
                        curl_setopt($ch,CURLOPT_URL,$url);
                        curl_setopt($ch,CURLOPT_POST,true);
                        curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                        curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                        curl_exec($ch);
                    }
                }
                $insertdata = array(
                    'lapataId' => $lapataId,
                    'isLapata' => $isLapata,
                    'wantedIds' => implode(',',$wantedId),
                    'criminalIds' => implode(',',$criminalId),
                    'Idtype' => $_POST['idType'],
                    'IdNumber' => $idNumber,
                    'userId' => $_SESSION['user_id'],
                    'isFound' => $isUserFound,
                    'isMissing' => $isMissing,
                    'missingId' => implode(',',$missingId),
                    'personId' => $personId
                );
                $insert = $this->db->insert('searchpersonhistory',$insertdata);
                if($insert)
                {
                    if($isAadharCorrect == 1)
                    {
                        $_SESSION['searchId'] = $this->db->insert_id();
                        $isOnlyUser = 0;
                        if(!$isWanted && !$isLapata && !$isCriminal && !$isMissing)
                        {
                            $isOnlyUser = 1;
                        }
                        $response = array(
                            'personId' => $personId,
                            'isOnlyUser' => $isOnlyUser,
                            'status' => 'success',
                            'personName' => $personName,
                            'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                            'gender' => strtolower($gender),
                            'isWanted' => $isWanted,
                            'isLapata' => $isLapata,
                            'isCriminal' => $isCriminal,
                            'age' => $age,
                            'address' => $address,
                            'isAadharCorrect' => $isAadharCorrect,
                            'isDobCorrect' => 1,
                            'isGenderCorrect' => 1,
                            'message' => 'Person Found',
                            'isVisible' => $isVisible,
                            'isMissing' => $isMissing,
                            'isVerified' => $isVerified,
                            'isRegistered' => $isUserFound,
                            'image' => ($userphoto != '' ? $userphoto : base_url().'assets/img/noimage.jpg')
                        );
                        echo json_encode($response);   
                    }else{
                        $response = array(
                            'status' => 'incorrect',
                            'isAadharCorrect' => $isAadharCorrect,
                            'isDobCorrect' => 1,
                            'isGenderCorrect' => 1,
                        );
                        echo json_encode($response);   
                    }
                }else{
                    $response = array(
                        'status' => 'error',
                        'message' => 'Something Went Wrong'
                    );
                    echo json_encode($response);
                }   
            }
        }
    }
    
    function wantedRecordAfterLogin()
    {
        if($this->session->userdata('police_login') == 'yes')
        {
            if(isset($_SESSION['searchId']))
            {
                $page_data['checkDetail'] = $this->db->query('select * from searchpersonhistory where Id='.$_SESSION['searchId'])->result_array();
                $page_data['criminalDetail'] = array();
                if($page_data['checkDetail'][0]['wantedIds'] != NULL)
                {
                    $page_data['wantedDetail'] = $this->db->query('select * from criminals where Id In('.$page_data['checkDetail'][0]['wantedIds'].')')->result_array();
                }else{
                    $page_data['wantedDetail'] = array();
                }
                $page_data['control'] = 'user';
                $page_data['title'] = 'Wanted Records';
                $page_data['page_name'] = 'wantedRecord';
                $this->load->view('police/index', $page_data);
            }else{
                redirect($this->getSettings('noPoliceVehicleId'),'refresh');
            }
        }else{
            redirect(base_url().'police/login','refresh');
        }
    }
 
 function criminalRecordAfterLogin()
    {
        if($this->session->userdata('police_login') == 'yes')
        {
            if(isset($_SESSION['searchId']))
            {
                $page_data['checkDetail'] = $this->db->query('select * from searchpersonhistory where Id='.$_SESSION['searchId'])->result_array();
                if($page_data['checkDetail'][0]['criminalIds'] != NULL)
                {
                    $page_data['criminalDetail'] = $this->db->query('select * from criminals where Id In('.$page_data['checkDetail'][0]['criminalIds'].')')->result_array();
                }else{
                    $page_data['criminalDetail'] = array();
                }
                $page_data['wantedDetail'] = array();
                $page_data['control'] = 'police';
                $page_data['title'] = 'Criminal Records';
                $page_data['page_name'] = 'criminalRecord';
                $this->load->view('police/index', $page_data);
            }else{
                redirect($this->getSettings('noPoliceVehicleId'),'refresh');
            }
        }else{
            redirect(base_url().'police/login','refresh');
        }
    }
    
    function getSettings($name='gridlineKey')
    {
        $getSettings = $this->db->query('select * from settings where name="'.$name.'"')->result_array();
        return $getSettings[0]['value'];
    }
 
 
   function checkInactiveInfoAfterLogin()
    {
        $data = $_POST["photo"];
        $image_array_1 = explode(";", $data);
        $split1 = explode('data:image/',$image_array_1[0]);
        $image_array_2 = explode(",", $image_array_1[1]);
        $data = base64_decode($image_array_2[1]);
        
        $newImagePath = 'upload/checkPerson/'.time().''.rand(0,10000).'.'.$split1[1];
        
        file_put_contents($newImagePath, $data);
        $config['image_library'] = 'gd2';  
        $config['source_image'] = $newImagePath;  
        $config['create_thumb'] = FALSE;  
        $config['maintain_ratio'] = true;  
        $config['quality'] = '60%';  
        $config['width'] = 320;  
        $config['height'] = 240;  
        $config['new_image'] = $newImagePath;  
        $this->load->library('image_lib', $config);  
        $this->image_lib->resize(); 
        $this->load->library('Image_autorotate',$newImagePath);
        $this->image_lib->clear();
        $personName = '';
        $gender = '';
        $aadhar = '';
        $gender = '';
        $isVerified = 'No';
        $isVisible = 0;
        $age = '';
        $address = '';
        $isUserFound = 0;
        $isMissing = 0;
        $isAadharCorrect = 0;
        $idNumber = '';
        $confidence = 0;
        $faceResponse = array();
        if($_POST['idType'] == 'aadhar')
        {
            $idNumber = $_POST['idNumber'];
            if(strlen($_POST['idNumber']) != 12)
            {
                $response = array(
                    'status' => 'error',
                    'message' => 'Aadhar number must be 12 digit number'
                );
                echo json_encode($response);
                return;
            }
            $getIfPersonAvailable = $this->db->query('select * from user where aadhar_id="'.$_POST['idNumber'].'"')->result_array();
            $userphoto = '';
            if(count($getIfPersonAvailable) > 0)
            {
                $curl = curl_init();
                curl_setopt_array($curl, array(
                  CURLOPT_URL => 'fmatch.shammtech.in',
                  CURLOPT_RETURNTRANSFER => true,
                  CURLOPT_ENCODING => '',
                  CURLOPT_MAXREDIRS => 10,
                  CURLOPT_TIMEOUT => 0,
                  CURLOPT_FOLLOWLOCATION => true,
                  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                  CURLOPT_CUSTOMREQUEST => 'POST',
                  CURLOPT_POSTFIELDS => 'image1='.base_url().''.$getIfPersonAvailable[0]['facematchphoto'].'&image2='.base_url().''.$newImagePath,
                  CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/x-www-form-urlencoded'
                  ),
                ));
                $response = json_decode(curl_exec($curl),true);
                $response['image'] = base_url().''.$newImagePath;
                $faceResponse = json_encode($response);
                if($response['message'] != 'Internal Server Error')
                {
                    $confidence = $response['confidence'];   
                }
                $isAadharCorrect = 1;
                $isVisible = $getIfPersonAvailable[0]['visibility'];
                $isVerified = 1;
                $isUserFound = 1;
                $personName = $getIfPersonAvailable[0]['aadharname'];
                $gender = $getIfPersonAvailable[0]['gender'];
                $aadhar = $getIfPersonAvailable[0]['aadhar_id'];
                $from=new DateTime(date('Y-m-d'));
                $to   = new DateTime($getIfPersonAvailable[0]['dob']);
                $age = ($from->diff($to)->y).'- Years';
                $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                $userphoto = base_url().''.(($getIfPersonAvailable[0]['aadharphoto'] != NULL) ? $getIfPersonAvailable[0]['aadharphoto'] : $getIfPersonAvailable[0]['facematchphoto']);
            }
            $getMissingPerson = $this->db->query('select * from missingperson where missingaadhar="'.$_POST['idNumber'].'" and isFound != 1')->result_array();
            if(count($getMissingPerson) > 0)
            {
                $isAadharCorrect = 1;
                if($getMissingPerson[0]['missinggender'] != NULL)
                {
                    $isMissing = 1;
                    $personName = $getMissingPerson[0]['missingname'];
                    $gender = $getMissingPerson[0]['missinggender'];
                    $aadhar = $getMissingPerson[0]['missingaadhar'];
                    $from=new DateTime(date('Y-m-d'));
                    $to   = new DateTime($getMissingPerson[0]['missingdob']);
                    $age = ($from->diff($to)->y).'- Years';
                    if(count($getIfPersonAvailable) > 0)
                    {
                        $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                    }else{
                        $address = $getMissingPerson[0]['fathercity'].','.$getMissingPerson[0]['fatherstate'];
                    }
                    if(count($getIfPersonAvailable) == 0)
                    {
                        $curl = curl_init();
                        curl_setopt_array($curl, array(
                          CURLOPT_URL => 'fmatch.shammtech.in',
                          CURLOPT_RETURNTRANSFER => true,
                          CURLOPT_ENCODING => '',
                          CURLOPT_MAXREDIRS => 10,
                          CURLOPT_TIMEOUT => 0,
                          CURLOPT_FOLLOWLOCATION => true,
                          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                          CURLOPT_CUSTOMREQUEST => 'POST',
                          CURLOPT_POSTFIELDS => 'image1='.base_url().''.$getMissingPerson[0]['facematchphoto'].'&image2='.base_url().''.$newImagePath,
                          CURLOPT_HTTPHEADER => array(
                            'Content-Type: application/x-www-form-urlencoded'
                          ),
                        ));
                        $response = json_decode(curl_exec($curl),true);
                        $faceResponse = json_encode($response);
                        if($response['message'] != 'Internal Server Error')
                        {
                            $confidence = $response['confidence'];   
                        }
                        $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                    }   
                }else{
                    $getFullDetail = $this->db->query('select * from missingpersondetail where missingId='.$getMissingPerson[0]['Id'])->result_array();
                    if(count($getFullDetail) > 0)
                    {
                        $isMissing = 1; 
                        $personName = $getMissingPerson[0]['missingname'];
                        $gender = $getMissingPerson[0]['missinggender'];
                        $aadhar = $getMissingPerson[0]['missingaadhar'];
                        $from=new DateTime(date('Y-m-d'));
                        $to   = new DateTime($getMissingPerson[0]['missingdob']);
                        $age = ($from->diff($to)->y).'- Years';
                        if(count($getIfPersonAvailable) > 0)
                        {
                            $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                        }else{
                            $address = $getMissingPerson[0]['fathercity'].','.$getMissingPerson[0]['fatherstate'];
                        }
                        if(count($getIfPersonAvailable) == 0)
                        {
                            $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                        }   
                    }else{
                        $getUserDetail = $this->db->query('select * from user where aadhar_id="'.$_POST['aadhar_id'].'"')->result_array();
                        if(count($getUserDetail) > 0)
                        {
                            $isMissing = 1; 
                            $personName = $getUserDetail[0]['aadharname'];
                            $gender = $getUserDetail[0]['gender'];
                            $aadhar = $getUserDetail[0]['aadhar_id'];
                            $from=new DateTime(date('Y-m-d'));
                            $to   = new DateTime($getUserDetail[0]['dob']);
                            $age = ($from->diff($to)->y).'- Years';
                            $address = $getUserDetail[0]['vtc'].','.$getUserDetail[0]['state'];
                            if(count($getIfPersonAvailable) == 0)
                            {
                                $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                            }   
                        }
                    }
                }
            }else{
                $getUserDetail = $this->db->query('select * from user where aadhar_id="'.$_POST['aadhar_id'].'"')->result_array();
                if(count($getUserDetail) > 0)
                {
                    $isAadharCorrect = 1;
                    $isMissing = 0; 
                    $personName = $getUserDetail[0]['aadharname'];
                    $gender = $getUserDetail[0]['gender'];
                    $aadhar = $getUserDetail[0]['aadhar_id'];
                    $from=new DateTime(date('Y-m-d'));
                    $to   = new DateTime($getUserDetail[0]['dob']);
                    $age = ($from->diff($to)->y).'- Years';
                    $address = $getUserDetail[0]['vtc'].','.$getUserDetail[0]['state'];
                    if(count($getIfPersonAvailable) == 0)
                    {
                        $userphoto = base_url().''.(($getUserDetail[0]['facematchphoto'] != NULL) ? $getUserDetail[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                    }   
                }
            }
            if($confidence > 83)
            {
                $insertdata = array(
                    'inActivePhoto' => $newImagePath,
                    'isFound' => $isUserFound,
                    'isMissing' => $isMissing,
                    'IdNumber' => $_POST['idNumber'],
                    'Idtype' => $_POST['idType'],
                    'response' => $faceResponse
                );
                $this->db->where('Id',$_SESSION['searchId']);
                $update = $this->db->update('searchpersonhistory',$insertdata);
                if($update)
                {
                    if($isAadharCorrect == 1)
                    {
                        $response = array(
                            'status' => 'success',
                            'personName' => $personName,
                            'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                            'gender' => strtolower($gender),
                            'age' => $age,
                            'address' => $address,
                            'isAadharCorrect' => $isAadharCorrect,
                            'isDobCorrect' => 1,
                            'isGenderCorrect' => 1,
                            'message' => 'Person Found',
                            'isVisible' => $isVisible,
                            'isMissing' => $isMissing,
                            'isVerified' => $isVerified,
                            'isRegistered' => $isUserFound,
                            'image' => $userphoto
                        );
                        echo json_encode($response);   
                    }else{
                        $response = array(
                            'status' => 'incorrect',
                            'isAadharCorrect' => $isAadharCorrect,
                            'isDobCorrect' => 1,
                            'isGenderCorrect' => 1,
                        );
                        echo json_encode($response);   
                    }
                }else{
                    $response = array(
                        'status' => 'error',
                        'message' => 'Something Went Wrong'
                    );
                    echo json_encode($response);
                }
            }else{
                $insertdata = array(
                    'inActivePhoto' => $newImagePath,
                    'response' => $faceResponse
                );   
                $this->db->where('Id',$_SESSION['searchId']);
                $update = $this->db->update('searchpersonhistory',$insertdata);
                $response = array(
                    'status' => 'error',
                    'message' => 'Face Not Matched'
                );
                echo json_encode($response);    
            }
        }
        if($_POST['idType'] == 'dl')
        {
            $idNumber = $_POST['idNumber'];
            $getIfAlready = $this->db->query('select * from dllist where dlNumber="'.$idNumber.'"')->result_array();
            if(count($getIfAlready) > 0)
            {
                $getIfPersonAvailable = $this->db->query('select * from user where uid='.$getIfAlready[0]['userId'])->result_array();   
            }else{
                $getIfPersonAvailable = array();
            }
            $userphoto = '';
            if(count($getIfPersonAvailable) > 0)
            {
                $curl = curl_init();
                curl_setopt_array($curl, array(
                  CURLOPT_URL => 'fmatch.shammtech.in',
                  CURLOPT_RETURNTRANSFER => true,
                  CURLOPT_ENCODING => '',
                  CURLOPT_MAXREDIRS => 10,
                  CURLOPT_TIMEOUT => 0,
                  CURLOPT_FOLLOWLOCATION => true,
                  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                  CURLOPT_CUSTOMREQUEST => 'POST',
                  CURLOPT_POSTFIELDS => 'image1='.base_url().''.$getIfPersonAvailable[0]['facematchphoto'].'&image2='.base_url().''.$newImagePath,
                  CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/x-www-form-urlencoded'
                  ),
                ));
                $response = json_decode(curl_exec($curl),true);
                if($response['message'] != 'Internal Server Error')
                {
                    $confidence = $response['confidence'];   
                }
                $isAadharCorrect = 1;
                $isVisible = $getIfPersonAvailable[0]['visibility'];
                $isVerified = 1;
                $isUserFound = 1;
                $personName = $getIfPersonAvailable[0]['aadharname'];
                $gender = $getIfPersonAvailable[0]['gender'];
                $aadhar = $getIfPersonAvailable[0]['aadhar_id'];
                $from=new DateTime(date('Y-m-d'));
                $to   = new DateTime($getIfPersonAvailable[0]['dob']);
                $age = ($from->diff($to)->y).'- Years';
                $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                $userphoto = base_url().''.(($getIfPersonAvailable[0]['aadharphoto'] != NULL) ? $getIfPersonAvailable[0]['aadharphoto'] : $getIfPersonAvailable[0]['facematchphoto']);
            }
            if(count($getIfPersonAvailable) > 0)
            {
                $getMissingPerson = $this->db->query('select * from missingperson where missingaadhar="'.$getIfPersonAvailable[0]['aadhar_id'].'" and isFound != 1')->result_array();   
            }else{
                $getMissingPerson = array();
            }
            if(count($getMissingPerson) > 0)
            {
                $isAadharCorrect = 1;
                if($getMissingPerson[0]['missinggender'] != NULL)
                {
                    $isMissing = 1;
                    $personName = $getMissingPerson[0]['missingname'];
                    $gender = $getMissingPerson[0]['missinggender'];
                    $aadhar = $getMissingPerson[0]['missingaadhar'];
                    $from=new DateTime(date('Y-m-d'));
                    $to   = new DateTime($getMissingPerson[0]['missingdob']);
                    $age = ($from->diff($to)->y).'- Years';
                    if(count($getIfPersonAvailable) > 0)
                    {
                        $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                    }else{
                        $address = $getMissingPerson[0]['fathercity'].','.$getMissingPerson[0]['fatherstate'];
                    }
                    if(count($getIfPersonAvailable) == 0)
                    {
                        $curl = curl_init();
                        curl_setopt_array($curl, array(
                          CURLOPT_URL => 'fmatch.shammtech.in',
                          CURLOPT_RETURNTRANSFER => true,
                          CURLOPT_ENCODING => '',
                          CURLOPT_MAXREDIRS => 10,
                          CURLOPT_TIMEOUT => 0,
                          CURLOPT_FOLLOWLOCATION => true,
                          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                          CURLOPT_CUSTOMREQUEST => 'POST',
                          CURLOPT_POSTFIELDS => 'image1='.base_url().''.$getMissingPerson[0]['facematchphoto'].'&image2='.base_url().''.$newImagePath,
                          CURLOPT_HTTPHEADER => array(
                            'Content-Type: application/x-www-form-urlencoded'
                          ),
                        ));
                        $response = json_decode(curl_exec($curl),true);
                        if($response['message'] != 'Internal Server Error')
                        {
                            $confidence = $response['confidence'];   
                        }
                        $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                    }   
                }else{
                    $getFullDetail = $this->db->query('select * from missingpersondetail where missingId='.$getMissingPerson[0]['Id'])->result_array();
                    if(count($getFullDetail) > 0)
                    {
                        $isMissing = 1; 
                        $personName = $getMissingPerson[0]['missingname'];
                        $gender = $getMissingPerson[0]['missinggender'];
                        $aadhar = $getMissingPerson[0]['missingaadhar'];
                        $from=new DateTime(date('Y-m-d'));
                        $to   = new DateTime($getMissingPerson[0]['missingdob']);
                        $age = ($from->diff($to)->y).'- Years';
                        if(count($getIfPersonAvailable) > 0)
                        {
                            $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                        }else{
                            $address = $getMissingPerson[0]['fathercity'].','.$getMissingPerson[0]['fatherstate'];
                        }
                        if(count($getIfPersonAvailable) == 0)
                        {
                            $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                        }   
                    }else{
                        $getUserDetail = $this->db->query('select * from user where aadhar_id="'.$getIfPersonAvailable[0]['aadhar_id'].'"')->result_array();
                        if(count($getUserDetail) > 0)
                        {
                            $isMissing = 1; 
                            $personName = $getUserDetail[0]['aadharname'];
                            $gender = $getUserDetail[0]['gender'];
                            $aadhar = $getUserDetail[0]['aadhar_id'];
                            $from=new DateTime(date('Y-m-d'));
                            $to   = new DateTime($getUserDetail[0]['dob']);
                            $age = ($from->diff($to)->y).'- Years';
                            $address = $getUserDetail[0]['vtc'].','.$getUserDetail[0]['state'];
                            if(count($getIfPersonAvailable) == 0)
                            {
                                $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                            }   
                        }
                    }
                }
            }else{
                if(count($getIfPersonAvailable) > 0)
                {
                    $getUserDetail = $this->db->query('select * from user where aadhar_id="'.$getIfPersonAvailable[0]['aadhar_id'].'"')->result_array();   
                }else{
                    $getUserDetail = array();
                }
                if(count($getUserDetail) > 0)
                {
                    $isAadharCorrect = 1;
                    $isMissing = 0; 
                    $personName = $getUserDetail[0]['aadharname'];
                    $gender = $getUserDetail[0]['gender'];
                    $aadhar = $getUserDetail[0]['aadhar_id'];
                    $from=new DateTime(date('Y-m-d'));
                    $to   = new DateTime($getUserDetail[0]['dob']);
                    $age = ($from->diff($to)->y).'- Years';
                    $address = $getUserDetail[0]['vtc'].','.$getUserDetail[0]['state'];
                    if(count($getIfPersonAvailable) == 0)
                    {
                        $userphoto = base_url().''.(($getUserDetail[0]['facematchphoto'] != NULL) ? $getUserDetail[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                    }   
                }
            }
            if($confidence > 83)
            {
                $insertdata = array(
                    'inActivePhoto' => $newImagePath,
                    'isFound' => $isUserFound,
                    'isMissing' => $isMissing,
                    'IdNumber' => $_POST['idNumber'],
                    'Idtype' => $_POST['idType'],
                    'response' => $faceResponse
                );
                $this->db->where('Id',$_SESSION['searchId']);
                $update = $this->db->update('searchpersonhistory',$insertdata);
                if($update)
                {
                    if($isAadharCorrect == 1)
                    {
                        $response = array(
                            'status' => 'success',
                            'personName' => $personName,
                            'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                            'gender' => strtolower($gender),
                            'age' => $age,
                            'address' => $address,
                            'isAadharCorrect' => $isAadharCorrect,
                            'isDobCorrect' => 1,
                            'isGenderCorrect' => 1,
                            'message' => 'Person Found',
                            'isVisible' => $isVisible,
                            'isMissing' => $isMissing,
                            'isVerified' => $isVerified,
                            'isRegistered' => $isUserFound,
                            'image' => $userphoto
                        );
                        echo json_encode($response);   
                    }else{
                        $response = array(
                            'status' => 'incorrect',
                            'isAadharCorrect' => $isAadharCorrect,
                            'isDobCorrect' => 1,
                            'isGenderCorrect' => 1,
                        );
                        echo json_encode($response);   
                    }
                }else{
                    $response = array(
                        'status' => 'error',
                        'message' => 'Something Went Wrong'
                    );
                    echo json_encode($response);
                }
            }else{
                $insertdata = array(
                    'inActivePhoto' => $newImagePath,
                    'response' => $faceResponse
                );   
                $this->db->where('Id',$_SESSION['searchId']);
                $update = $this->db->update('searchpersonhistory',$insertdata);
                $response = array(
                    'status' => 'error',
                    'message' => 'Face Not Matched'
                );
                echo json_encode($response);    
            }
        }
        if($_POST['idType'] == 'voter')
        {
            $idNumber = $_POST['idNumber'];
            $getIfAlready = $this->db->query('select * from voterslist where voterNumber="'.$idNumber.'"')->result_array();
            if(count($getIfAlready) > 0)
            {
                $getIfPersonAvailable = $this->db->query('select * from user where uid='.$getIfAlready[0]['userId'])->result_array();   
            }else{
                $getIfPersonAvailable = array();
            }
            $userphoto = '';
            if(count($getIfPersonAvailable) > 0)
            {
                $curl = curl_init();
                curl_setopt_array($curl, array(
                  CURLOPT_URL => 'fmatch.shammtech.in',
                  CURLOPT_RETURNTRANSFER => true,
                  CURLOPT_ENCODING => '',
                  CURLOPT_MAXREDIRS => 10,
                  CURLOPT_TIMEOUT => 0,
                  CURLOPT_FOLLOWLOCATION => true,
                  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                  CURLOPT_CUSTOMREQUEST => 'POST',
                  CURLOPT_POSTFIELDS => 'image1='.base_url().''.$getIfPersonAvailable[0]['facematchphoto'].'&image2='.base_url().''.$newImagePath,
                  CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/x-www-form-urlencoded'
                  ),
                ));
                $response = json_decode(curl_exec($curl),true);
                if($response['message'] != 'Internal Server Error')
                {
                    $confidence = $response['confidence'];   
                }
                $isAadharCorrect = 1;
                $isVisible = $getIfPersonAvailable[0]['visibility'];
                $isVerified = 1;
                $isUserFound = 1;
                $personName = $getIfPersonAvailable[0]['aadharname'];
                $gender = $getIfPersonAvailable[0]['gender'];
                $aadhar = $getIfPersonAvailable[0]['aadhar_id'];
                $from=new DateTime(date('Y-m-d'));
                $to   = new DateTime($getIfPersonAvailable[0]['dob']);
                $age = ($from->diff($to)->y).'- Years';
                $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                $userphoto = base_url().''.(($getIfPersonAvailable[0]['aadharphoto'] != NULL) ? $getIfPersonAvailable[0]['aadharphoto'] : $getIfPersonAvailable[0]['facematchphoto']);
            }
            if(count($getIfPersonAvailable) > 0)
            {
                $getMissingPerson = $this->db->query('select * from missingperson where missingaadhar="'.$getIfPersonAvailable[0]['aadhar_id'].'" and isFound != 1')->result_array();   
            }else{
                $getMissingPerson = array();
            }
            if(count($getMissingPerson) > 0)
            {
                $isAadharCorrect = 1;
                if($getMissingPerson[0]['missinggender'] != NULL)
                {
                    $isMissing = 1;
                    $personName = $getMissingPerson[0]['missingname'];
                    $gender = $getMissingPerson[0]['missinggender'];
                    $aadhar = $getMissingPerson[0]['missingaadhar'];
                    $from=new DateTime(date('Y-m-d'));
                    $to   = new DateTime($getMissingPerson[0]['missingdob']);
                    $age = ($from->diff($to)->y).'- Years';
                    if(count($getIfPersonAvailable) > 0)
                    {
                        $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                    }else{
                        $address = $getMissingPerson[0]['fathercity'].','.$getMissingPerson[0]['fatherstate'];
                    }
                    if(count($getIfPersonAvailable) == 0)
                    {
                        $curl = curl_init();
                        curl_setopt_array($curl, array(
                          CURLOPT_URL => 'fmatch.shammtech.in',
                          CURLOPT_RETURNTRANSFER => true,
                          CURLOPT_ENCODING => '',
                          CURLOPT_MAXREDIRS => 10,
                          CURLOPT_TIMEOUT => 0,
                          CURLOPT_FOLLOWLOCATION => true,
                          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                          CURLOPT_CUSTOMREQUEST => 'POST',
                          CURLOPT_POSTFIELDS => 'image1='.base_url().''.$getMissingPerson[0]['facematchphoto'].'&image2='.base_url().''.$newImagePath,
                          CURLOPT_HTTPHEADER => array(
                            'Content-Type: application/x-www-form-urlencoded'
                          ),
                        ));
                        $response = json_decode(curl_exec($curl),true);
                        if($response['message'] != 'Internal Server Error')
                        {
                            $confidence = $response['confidence'];   
                        }
                        $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                    }   
                }else{
                    $getFullDetail = $this->db->query('select * from missingpersondetail where missingId='.$getMissingPerson[0]['Id'])->result_array();
                    if(count($getFullDetail) > 0)
                    {
                        $isMissing = 1; 
                        $personName = $getMissingPerson[0]['missingname'];
                        $gender = $getMissingPerson[0]['missinggender'];
                        $aadhar = $getMissingPerson[0]['missingaadhar'];
                        $from=new DateTime(date('Y-m-d'));
                        $to   = new DateTime($getMissingPerson[0]['missingdob']);
                        $age = ($from->diff($to)->y).'- Years';
                        if(count($getIfPersonAvailable) > 0)
                        {
                            $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                        }else{
                            $address = $getMissingPerson[0]['fathercity'].','.$getMissingPerson[0]['fatherstate'];
                        }
                        if(count($getIfPersonAvailable) == 0)
                        {
                            $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                        }   
                    }else{
                        $getUserDetail = $this->db->query('select * from user where aadhar_id="'.$getIfPersonAvailable[0]['aadhar_id'].'"')->result_array();
                        if(count($getUserDetail) > 0)
                        {
                            $isMissing = 1; 
                            $personName = $getUserDetail[0]['aadharname'];
                            $gender = $getUserDetail[0]['gender'];
                            $aadhar = $getUserDetail[0]['aadhar_id'];
                            $from=new DateTime(date('Y-m-d'));
                            $to   = new DateTime($getUserDetail[0]['dob']);
                            $age = ($from->diff($to)->y).'- Years';
                            $address = $getUserDetail[0]['vtc'].','.$getUserDetail[0]['state'];
                            if(count($getIfPersonAvailable) == 0)
                            {
                                $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                            }   
                        }
                    }
                }
            }else{
                if(count($getIfPersonAvailable) > 0)
                {
                    $getUserDetail = $this->db->query('select * from user where aadhar_id="'.$getIfPersonAvailable[0]['aadhar_id'].'"')->result_array();   
                }else{
                    $getUserDetail = array();
                }
                if(count($getUserDetail) > 0)
                {
                    $isAadharCorrect = 1;
                    $isMissing = 0; 
                    $personName = $getUserDetail[0]['aadharname'];
                    $gender = $getUserDetail[0]['gender'];
                    $aadhar = $getUserDetail[0]['aadhar_id'];
                    $from=new DateTime(date('Y-m-d'));
                    $to   = new DateTime($getUserDetail[0]['dob']);
                    $age = ($from->diff($to)->y).'- Years';
                    $address = $getUserDetail[0]['vtc'].','.$getUserDetail[0]['state'];
                    if(count($getIfPersonAvailable) == 0)
                    {
                        $userphoto = base_url().''.(($getUserDetail[0]['facematchphoto'] != NULL) ? $getUserDetail[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                    }   
                }
            }
            if($confidence > 83)
            {
                $insertdata = array(
                    'inActivePhoto' => $newImagePath,
                    'isFound' => $isUserFound,
                    'isMissing' => $isMissing,
                    'IdNumber' => $_POST['idNumber'],
                    'Idtype' => $_POST['idType'],
                    'response' => $faceResponse
                );
                $this->db->where('Id',$_SESSION['searchId']);
                $update = $this->db->update('searchpersonhistory',$insertdata);
                if($update)
                {
                    if($isAadharCorrect == 1)
                    {
                        $response = array(
                            'status' => 'success',
                            'personName' => $personName,
                            'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                            'gender' => strtolower($gender),
                            'age' => $age,
                            'address' => $address,
                            'isAadharCorrect' => $isAadharCorrect,
                            'isDobCorrect' => 1,
                            'isGenderCorrect' => 1,
                            'message' => 'Person Found',
                            'isVisible' => $isVisible,
                            'isMissing' => $isMissing,
                            'isVerified' => $isVerified,
                            'isRegistered' => $isUserFound,
                            'image' => $userphoto
                        );
                        echo json_encode($response);   
                    }else{
                        $response = array(
                            'status' => 'incorrect',
                            'isAadharCorrect' => $isAadharCorrect,
                            'isDobCorrect' => 1,
                            'isGenderCorrect' => 1,
                        );
                        echo json_encode($response);   
                    }
                }else{
                    $response = array(
                        'status' => 'error',
                        'message' => 'Something Went Wrong'
                    );
                    echo json_encode($response);
                }
            }else{
                $insertdata = array(
                    'inActivePhoto' => $newImagePath,
                    'response' => $faceResponse
                );   
                $this->db->where('Id',$_SESSION['searchId']);
                $update = $this->db->update('searchpersonhistory',$insertdata);
                $response = array(
                    'status' => 'error',
                    'message' => 'Face Not Matched'
                );
                echo json_encode($response);    
            }
        }
        if($_POST['idType'] == 'pan')
        {
            $idNumber = $_POST['idNumber'];
            $getIfAlready = $this->db->query('select * from panlist where panNumber="'.$idNumber.'"')->result_array();
            if(count($getIfAlready) > 0)
            {
                $getIfPersonAvailable = $this->db->query('select * from user where uid='.$getIfAlready[0]['userId'])->result_array();   
            }else{
                $getIfPersonAvailable = array();
            }
            $userphoto = '';
            if(count($getIfPersonAvailable) > 0)
            {
                $curl = curl_init();
                curl_setopt_array($curl, array(
                  CURLOPT_URL => 'fmatch.shammtech.in',
                  CURLOPT_RETURNTRANSFER => true,
                  CURLOPT_ENCODING => '',
                  CURLOPT_MAXREDIRS => 10,
                  CURLOPT_TIMEOUT => 0,
                  CURLOPT_FOLLOWLOCATION => true,
                  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                  CURLOPT_CUSTOMREQUEST => 'POST',
                  CURLOPT_POSTFIELDS => 'image1='.base_url().''.$getIfPersonAvailable[0]['facematchphoto'].'&image2='.base_url().''.$newImagePath,
                  CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/x-www-form-urlencoded'
                  ),
                ));
                $response = json_decode(curl_exec($curl),true);
                if($response['message'] != 'Internal Server Error')
                {
                    $confidence = $response['confidence'];   
                }
                $isAadharCorrect = 1;
                $isVisible = $getIfPersonAvailable[0]['visibility'];
                $isVerified = 1;
                $isUserFound = 1;
                $personName = $getIfPersonAvailable[0]['aadharname'];
                $gender = $getIfPersonAvailable[0]['gender'];
                $aadhar = $getIfPersonAvailable[0]['aadhar_id'];
                $from=new DateTime(date('Y-m-d'));
                $to   = new DateTime($getIfPersonAvailable[0]['dob']);
                $age = ($from->diff($to)->y).'- Years';
                $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                $userphoto = base_url().''.(($getIfPersonAvailable[0]['aadharphoto'] != NULL) ? $getIfPersonAvailable[0]['aadharphoto'] : $getIfPersonAvailable[0]['facematchphoto']);
            }
            if(count($getIfPersonAvailable) > 0)
            {
                $getMissingPerson = $this->db->query('select * from missingperson where missingaadhar="'.$getIfPersonAvailable[0]['aadhar_id'].'" and isFound != 1')->result_array();   
            }else{
                $getMissingPerson = array();
            }
            if(count($getMissingPerson) > 0)
            {
                $isAadharCorrect = 1;
                if($getMissingPerson[0]['missinggender'] != NULL)
                {
                    $isMissing = 1;
                    $personName = $getMissingPerson[0]['missingname'];
                    $gender = $getMissingPerson[0]['missinggender'];
                    $aadhar = $getMissingPerson[0]['missingaadhar'];
                    $from=new DateTime(date('Y-m-d'));
                    $to   = new DateTime($getMissingPerson[0]['missingdob']);
                    $age = ($from->diff($to)->y).'- Years';
                    if(count($getIfPersonAvailable) > 0)
                    {
                        $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                    }else{
                        $address = $getMissingPerson[0]['fathercity'].','.$getMissingPerson[0]['fatherstate'];
                    }
                    if(count($getIfPersonAvailable) == 0)
                    {
                        $curl = curl_init();
                        curl_setopt_array($curl, array(
                          CURLOPT_URL => 'fmatch.shammtech.in',
                          CURLOPT_RETURNTRANSFER => true,
                          CURLOPT_ENCODING => '',
                          CURLOPT_MAXREDIRS => 10,
                          CURLOPT_TIMEOUT => 0,
                          CURLOPT_FOLLOWLOCATION => true,
                          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                          CURLOPT_CUSTOMREQUEST => 'POST',
                          CURLOPT_POSTFIELDS => 'image1='.base_url().''.$getIfPersonAvailable[0]['facematchphoto'].'&image2='.base_url().''.$newImagePath,
                          CURLOPT_HTTPHEADER => array(
                            'Content-Type: application/x-www-form-urlencoded'
                          ),
                        ));
                        $response = json_decode(curl_exec($curl),true);
                        if($response['message'] != 'Internal Server Error')
                        {
                            $confidence = $response['confidence'];   
                        }
                        $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                    }   
                }else{
                    $getFullDetail = $this->db->query('select * from missingpersondetail where missingId='.$getMissingPerson[0]['Id'])->result_array();
                    if(count($getFullDetail) > 0)
                    {
                        $isMissing = 1; 
                        $personName = $getMissingPerson[0]['missingname'];
                        $gender = $getMissingPerson[0]['missinggender'];
                        $aadhar = $getMissingPerson[0]['missingaadhar'];
                        $from=new DateTime(date('Y-m-d'));
                        $to   = new DateTime($getMissingPerson[0]['missingdob']);
                        $age = ($from->diff($to)->y).'- Years';
                        if(count($getIfPersonAvailable) > 0)
                        {
                            $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                        }else{
                            $address = $getMissingPerson[0]['fathercity'].','.$getMissingPerson[0]['fatherstate'];
                        }
                        if(count($getIfPersonAvailable) == 0)
                        {
                            $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                        }   
                    }else{
                        $getUserDetail = $this->db->query('select * from user where aadhar_id="'.$getIfPersonAvailable[0]['aadhar_id'].'"')->result_array();
                        if(count($getUserDetail) > 0)
                        {
                            $isMissing = 1; 
                            $personName = $getUserDetail[0]['aadharname'];
                            $gender = $getUserDetail[0]['gender'];
                            $aadhar = $getUserDetail[0]['aadhar_id'];
                            $from=new DateTime(date('Y-m-d'));
                            $to   = new DateTime($getUserDetail[0]['dob']);
                            $age = ($from->diff($to)->y).'- Years';
                            $address = $getUserDetail[0]['vtc'].','.$getUserDetail[0]['state'];
                            if(count($getIfPersonAvailable) == 0)
                            {
                                $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                            }   
                        }
                    }
                }
            }else{
                if(count($getIfPersonAvailable) > 0)
                {
                    $getUserDetail = $this->db->query('select * from user where aadhar_id="'.$getIfPersonAvailable[0]['aadhar_id'].'"')->result_array();   
                }else{
                    $getUserDetail = array();
                }
                if(count($getUserDetail) > 0)
                {
                    $isAadharCorrect = 1;
                    $isMissing = 0; 
                    $personName = $getUserDetail[0]['aadharname'];
                    $gender = $getUserDetail[0]['gender'];
                    $aadhar = $getUserDetail[0]['aadhar_id'];
                    $from=new DateTime(date('Y-m-d'));
                    $to   = new DateTime($getUserDetail[0]['dob']);
                    $age = ($from->diff($to)->y).'- Years';
                    $address = $getUserDetail[0]['vtc'].','.$getUserDetail[0]['state'];
                    if(count($getIfPersonAvailable) == 0)
                    {
                        $userphoto = base_url().''.(($getUserDetail[0]['facematchphoto'] != NULL) ? $getUserDetail[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                    }   
                }
            }
            if($confidence > 83)
            {
                $insertdata = array(
                    'inActivePhoto' => $newImagePath,
                    'isFound' => $isUserFound,
                    'isMissing' => $isMissing,
                    'IdNumber' => $_POST['idNumber'],
                    'Idtype' => $_POST['idType'],
                    'response' => $faceResponse
                );
                $this->db->where('Id',$_SESSION['searchId']);
                $update = $this->db->update('searchpersonhistory',$insertdata);
                if($update)
                {
                    if($isAadharCorrect == 1)
                    {
                        $response = array(
                            'status' => 'success',
                            'personName' => $personName,
                            'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                            'gender' => strtolower($gender),
                            'age' => $age,
                            'address' => $address,
                            'isAadharCorrect' => $isAadharCorrect,
                            'isDobCorrect' => 1,
                            'isGenderCorrect' => 1,
                            'message' => 'Person Found',
                            'isVisible' => $isVisible,
                            'isMissing' => $isMissing,
                            'isVerified' => $isVerified,
                            'isRegistered' => $isUserFound,
                            'image' => $userphoto
                        );
                        echo json_encode($response);   
                    }else{
                        $response = array(
                            'status' => 'incorrect',
                            'isAadharCorrect' => $isAadharCorrect,
                            'isDobCorrect' => 1,
                            'isGenderCorrect' => 1,
                        );
                        echo json_encode($response);   
                    }
                }else{
                    $response = array(
                        'status' => 'error',
                        'message' => 'Something Went Wrong'
                    );
                    echo json_encode($response);
                }
            }else{
                $insertdata = array(
                    'inActivePhoto' => $newImagePath,
                    'response' => $faceResponse
                );   
                $this->db->where('Id',$_SESSION['searchId']);
                $update = $this->db->update('searchpersonhistory',$insertdata);
                $response = array(
                    'status' => 'error',
                    'message' => 'Face Not Matched'
                );
                echo json_encode($response);    
            }
        }   
    }
    
    function checkInactiveInfo()
    {
        $data = $_POST["photo"];
        $image_array_1 = explode(";", $data);
        $split1 = explode('data:image/',$image_array_1[0]);
        $image_array_2 = explode(",", $image_array_1[1]);
        $data = base64_decode($image_array_2[1]);
        
        $newImagePath = 'upload/checkPerson/'.time().''.rand(0,10000).'.'.$split1[1];
        
        file_put_contents($newImagePath, $data);
        $config['image_library'] = 'gd2';  
        $config['source_image'] = $newImagePath;  
        $config['create_thumb'] = FALSE;  
        $config['maintain_ratio'] = true;  
        $config['quality'] = '60%';  
        $config['width'] = 320;  
        $config['height'] = 240;  
        $config['new_image'] = $newImagePath;  
        $this->load->library('image_lib', $config);  
        $this->image_lib->resize(); 
        $this->load->library('Image_autorotate',$newImagePath);
        $this->image_lib->clear();
        $personName = '';
        $gender = '';
        $aadhar = '';
        $gender = '';
        $isVerified = 'No';
        $isVisible = 0;
        $age = '';
        $address = '';
        $isUserFound = 0;
        $isMissing = 0;
        $isAadharCorrect = 0;
        $idNumber = '';
        $confidence = 0;
        $faceResponse = array();
        if($_POST['idType'] == 'aadhar')
        {
            $idNumber = $_POST['idNumber'];
            if(strlen($_POST['idNumber']) != 12)
            {
                $response = array(
                    'status' => 'error',
                    'message' => 'Aadhar number must be 12 digit number'
                );
                echo json_encode($response);
                return;
            }
            $getIfPersonAvailable = $this->db->query('select * from user where aadhar_id="'.$_POST['idNumber'].'"')->result_array();
            $userphoto = '';
            if(count($getIfPersonAvailable) > 0)
            {
                $curl = curl_init();
                curl_setopt_array($curl, array(
                  CURLOPT_URL => 'fmatch.shammtech.in',
                  CURLOPT_RETURNTRANSFER => true,
                  CURLOPT_ENCODING => '',
                  CURLOPT_MAXREDIRS => 10,
                  CURLOPT_TIMEOUT => 0,
                  CURLOPT_FOLLOWLOCATION => true,
                  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                  CURLOPT_CUSTOMREQUEST => 'POST',
                  CURLOPT_POSTFIELDS => 'image1='.base_url().''.$getIfPersonAvailable[0]['facematchphoto'].'&image2='.base_url().''.$newImagePath,
                  CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/x-www-form-urlencoded'
                  ),
                ));
                $response = json_decode(curl_exec($curl),true);
                $response['image'] = base_url().''.$newImagePath;
                $faceResponse = json_encode($response);
                if($response['message'] != 'Internal Server Error')
                {
                    $confidence = $response['confidence'];   
                }
                $isAadharCorrect = 1;
                $isVisible = $getIfPersonAvailable[0]['visibility'];
                $isVerified = 1;
                $isUserFound = 1;
                $personName = $getIfPersonAvailable[0]['aadharname'];
                $gender = $getIfPersonAvailable[0]['gender'];
                $aadhar = $getIfPersonAvailable[0]['aadhar_id'];
                $from=new DateTime(date('Y-m-d'));
                $to   = new DateTime($getIfPersonAvailable[0]['dob']);
                $age = ($from->diff($to)->y).'- Years';
                $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                $userphoto = base_url().''.(($getIfPersonAvailable[0]['aadharphoto'] != NULL) ? $getIfPersonAvailable[0]['aadharphoto'] : $getIfPersonAvailable[0]['facematchphoto']);
            }
            $getMissingPerson = $this->db->query('select * from missingperson where missingaadhar="'.$_POST['idNumber'].'" and isFound != 1')->result_array();
            if(count($getMissingPerson) > 0)
            {
                $isAadharCorrect = 1;
                if($getMissingPerson[0]['missinggender'] != NULL)
                {
                    $isMissing = 1;
                    $personName = $getMissingPerson[0]['missingname'];
                    $gender = $getMissingPerson[0]['missinggender'];
                    $aadhar = $getMissingPerson[0]['missingaadhar'];
                    $from=new DateTime(date('Y-m-d'));
                    $to   = new DateTime($getMissingPerson[0]['missingdob']);
                    $age = ($from->diff($to)->y).'- Years';
                    if(count($getIfPersonAvailable) > 0)
                    {
                        $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                    }else{
                        $address = $getMissingPerson[0]['fathercity'].','.$getMissingPerson[0]['fatherstate'];
                    }
                    if(count($getIfPersonAvailable) == 0)
                    {
                        $curl = curl_init();
                        curl_setopt_array($curl, array(
                          CURLOPT_URL => 'fmatch.shammtech.in',
                          CURLOPT_RETURNTRANSFER => true,
                          CURLOPT_ENCODING => '',
                          CURLOPT_MAXREDIRS => 10,
                          CURLOPT_TIMEOUT => 0,
                          CURLOPT_FOLLOWLOCATION => true,
                          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                          CURLOPT_CUSTOMREQUEST => 'POST',
                          CURLOPT_POSTFIELDS => 'image1='.base_url().''.$getMissingPerson[0]['facematchphoto'].'&image2='.base_url().''.$newImagePath,
                          CURLOPT_HTTPHEADER => array(
                            'Content-Type: application/x-www-form-urlencoded'
                          ),
                        ));
                        $response = json_decode(curl_exec($curl),true);
                        $faceResponse = json_encode($response);
                        if($response['message'] != 'Internal Server Error')
                        {
                            $confidence = $response['confidence'];   
                        }
                        $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                    }   
                }else{
                    $getFullDetail = $this->db->query('select * from missingpersondetail where missingId='.$getMissingPerson[0]['Id'])->result_array();
                    if(count($getFullDetail) > 0)
                    {
                        $isMissing = 1; 
                        $personName = $getMissingPerson[0]['missingname'];
                        $gender = $getMissingPerson[0]['missinggender'];
                        $aadhar = $getMissingPerson[0]['missingaadhar'];
                        $from=new DateTime(date('Y-m-d'));
                        $to   = new DateTime($getMissingPerson[0]['missingdob']);
                        $age = ($from->diff($to)->y).'- Years';
                        if(count($getIfPersonAvailable) > 0)
                        {
                            $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                        }else{
                            $address = $getMissingPerson[0]['fathercity'].','.$getMissingPerson[0]['fatherstate'];
                        }
                        if(count($getIfPersonAvailable) == 0)
                        {
                            $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                        }   
                    }else{
                        $getUserDetail = $this->db->query('select * from user where aadhar_id="'.$_POST['aadhar_id'].'"')->result_array();
                        if(count($getUserDetail) > 0)
                        {
                            $isMissing = 1; 
                            $personName = $getUserDetail[0]['aadharname'];
                            $gender = $getUserDetail[0]['gender'];
                            $aadhar = $getUserDetail[0]['aadhar_id'];
                            $from=new DateTime(date('Y-m-d'));
                            $to   = new DateTime($getUserDetail[0]['dob']);
                            $age = ($from->diff($to)->y).'- Years';
                            $address = $getUserDetail[0]['vtc'].','.$getUserDetail[0]['state'];
                            if(count($getIfPersonAvailable) == 0)
                            {
                                $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                            }   
                        }
                    }
                }
            }else{
                $getUserDetail = $this->db->query('select * from user where aadhar_id="'.$_POST['aadhar_id'].'"')->result_array();
                if(count($getUserDetail) > 0)
                {
                    $isAadharCorrect = 1;
                    $isMissing = 0; 
                    $personName = $getUserDetail[0]['aadharname'];
                    $gender = $getUserDetail[0]['gender'];
                    $aadhar = $getUserDetail[0]['aadhar_id'];
                    $from=new DateTime(date('Y-m-d'));
                    $to   = new DateTime($getUserDetail[0]['dob']);
                    $age = ($from->diff($to)->y).'- Years';
                    $address = $getUserDetail[0]['vtc'].','.$getUserDetail[0]['state'];
                    if(count($getIfPersonAvailable) == 0)
                    {
                        $userphoto = base_url().''.(($getUserDetail[0]['facematchphoto'] != NULL) ? $getUserDetail[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                    }   
                }
            }
            if($confidence > 83)
            {
                $insertdata = array(
                    'inActivePhoto' => $newImagePath,
                    'isPersonFound' => $isUserFound,
                    'isMissing' => $isMissing,
                    'idNumber' => $_POST['idNumber'],
                    'idType' => $_POST['idType'],
                    'response' => $faceResponse
                );
                $this->db->where('Id',$_SESSION['checkId']);
                $update = $this->db->update('checkperson',$insertdata);
                if($update)
                {
                    if($isAadharCorrect == 1)
                    {
                        $response = array(
                            'status' => 'success',
                            'personName' => $personName,
                            'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                            'gender' => strtolower($gender),
                            'age' => $age,
                            'address' => $address,
                            'isAadharCorrect' => $isAadharCorrect,
                            'isDobCorrect' => 1,
                            'isGenderCorrect' => 1,
                            'message' => 'Person Found',
                            'isVisible' => $isVisible,
                            'isMissing' => $isMissing,
                            'isVerified' => $isVerified,
                            'isRegistered' => $isUserFound,
                            'image' => $userphoto
                        );
                        echo json_encode($response);   
                    }else{
                        $response = array(
                            'status' => 'incorrect',
                            'isAadharCorrect' => $isAadharCorrect,
                            'isDobCorrect' => 1,
                            'isGenderCorrect' => 1,
                        );
                        echo json_encode($response);   
                    }
                }else{
                    $response = array(
                        'status' => 'error',
                        'message' => 'Something Went Wrong'
                    );
                    echo json_encode($response);
                }
            }else{
                $insertdata = array(
                    'inActivePhoto' => $newImagePath,
                    'response' => $faceResponse
                );   
                $this->db->where('Id',$_SESSION['checkId']);
                $update = $this->db->update('checkperson',$insertdata);
                $response = array(
                    'status' => 'error',
                    'message' => 'Face Not Matched'
                );
                echo json_encode($response);    
            }
        }
        if($_POST['idType'] == 'dl')
        {
            $idNumber = $_POST['idNumber'];
            $getIfAlready = $this->db->query('select * from dllist where dlNumber="'.$idNumber.'"')->result_array();
            if(count($getIfAlready) > 0)
            {
                $getIfPersonAvailable = $this->db->query('select * from user where uid='.$getIfAlready[0]['userId'])->result_array();   
            }else{
                $getIfPersonAvailable = array();
            }
            $userphoto = '';
            if(count($getIfPersonAvailable) > 0)
            {
                $curl = curl_init();
                curl_setopt_array($curl, array(
                  CURLOPT_URL => 'fmatch.shammtech.in',
                  CURLOPT_RETURNTRANSFER => true,
                  CURLOPT_ENCODING => '',
                  CURLOPT_MAXREDIRS => 10,
                  CURLOPT_TIMEOUT => 0,
                  CURLOPT_FOLLOWLOCATION => true,
                  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                  CURLOPT_CUSTOMREQUEST => 'POST',
                  CURLOPT_POSTFIELDS => 'image1='.base_url().''.$getIfPersonAvailable[0]['facematchphoto'].'&image2='.base_url().''.$newImagePath,
                  CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/x-www-form-urlencoded'
                  ),
                ));
                $response = json_decode(curl_exec($curl),true);
                if($response['message'] != 'Internal Server Error')
                {
                    $confidence = $response['confidence'];   
                }
                $isAadharCorrect = 1;
                $isVisible = $getIfPersonAvailable[0]['visibility'];
                $isVerified = 1;
                $isUserFound = 1;
                $personName = $getIfPersonAvailable[0]['aadharname'];
                $gender = $getIfPersonAvailable[0]['gender'];
                $aadhar = $getIfPersonAvailable[0]['aadhar_id'];
                $from=new DateTime(date('Y-m-d'));
                $to   = new DateTime($getIfPersonAvailable[0]['dob']);
                $age = ($from->diff($to)->y).'- Years';
                $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                $userphoto = base_url().''.(($getIfPersonAvailable[0]['aadharphoto'] != NULL) ? $getIfPersonAvailable[0]['aadharphoto'] : $getIfPersonAvailable[0]['facematchphoto']);
            }
            if(count($getIfPersonAvailable) > 0)
            {
                $getMissingPerson = $this->db->query('select * from missingperson where missingaadhar="'.$getIfPersonAvailable[0]['aadhar_id'].'" and isFound != 1')->result_array();   
            }else{
                $getMissingPerson = array();
            }
            if(count($getMissingPerson) > 0)
            {
                $isAadharCorrect = 1;
                if($getMissingPerson[0]['missinggender'] != NULL)
                {
                    $isMissing = 1;
                    $personName = $getMissingPerson[0]['missingname'];
                    $gender = $getMissingPerson[0]['missinggender'];
                    $aadhar = $getMissingPerson[0]['missingaadhar'];
                    $from=new DateTime(date('Y-m-d'));
                    $to   = new DateTime($getMissingPerson[0]['missingdob']);
                    $age = ($from->diff($to)->y).'- Years';
                    if(count($getIfPersonAvailable) > 0)
                    {
                        $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                    }else{
                        $address = $getMissingPerson[0]['fathercity'].','.$getMissingPerson[0]['fatherstate'];
                    }
                    if(count($getIfPersonAvailable) == 0)
                    {
                        $curl = curl_init();
                        curl_setopt_array($curl, array(
                          CURLOPT_URL => 'fmatch.shammtech.in',
                          CURLOPT_RETURNTRANSFER => true,
                          CURLOPT_ENCODING => '',
                          CURLOPT_MAXREDIRS => 10,
                          CURLOPT_TIMEOUT => 0,
                          CURLOPT_FOLLOWLOCATION => true,
                          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                          CURLOPT_CUSTOMREQUEST => 'POST',
                          CURLOPT_POSTFIELDS => 'image1='.base_url().''.$getMissingPerson[0]['facematchphoto'].'&image2='.base_url().''.$newImagePath,
                          CURLOPT_HTTPHEADER => array(
                            'Content-Type: application/x-www-form-urlencoded'
                          ),
                        ));
                        $response = json_decode(curl_exec($curl),true);
                        if($response['message'] != 'Internal Server Error')
                        {
                            $confidence = $response['confidence'];   
                        }
                        $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                    }   
                }else{
                    $getFullDetail = $this->db->query('select * from missingpersondetail where missingId='.$getMissingPerson[0]['Id'])->result_array();
                    if(count($getFullDetail) > 0)
                    {
                        $isMissing = 1; 
                        $personName = $getMissingPerson[0]['missingname'];
                        $gender = $getMissingPerson[0]['missinggender'];
                        $aadhar = $getMissingPerson[0]['missingaadhar'];
                        $from=new DateTime(date('Y-m-d'));
                        $to   = new DateTime($getMissingPerson[0]['missingdob']);
                        $age = ($from->diff($to)->y).'- Years';
                        if(count($getIfPersonAvailable) > 0)
                        {
                            $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                        }else{
                            $address = $getMissingPerson[0]['fathercity'].','.$getMissingPerson[0]['fatherstate'];
                        }
                        if(count($getIfPersonAvailable) == 0)
                        {
                            $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                        }   
                    }else{
                        $getUserDetail = $this->db->query('select * from user where aadhar_id="'.$getIfPersonAvailable[0]['aadhar_id'].'"')->result_array();
                        if(count($getUserDetail) > 0)
                        {
                            $isMissing = 1; 
                            $personName = $getUserDetail[0]['aadharname'];
                            $gender = $getUserDetail[0]['gender'];
                            $aadhar = $getUserDetail[0]['aadhar_id'];
                            $from=new DateTime(date('Y-m-d'));
                            $to   = new DateTime($getUserDetail[0]['dob']);
                            $age = ($from->diff($to)->y).'- Years';
                            $address = $getUserDetail[0]['vtc'].','.$getUserDetail[0]['state'];
                            if(count($getIfPersonAvailable) == 0)
                            {
                                $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                            }   
                        }
                    }
                }
            }else{
                if(count($getIfPersonAvailable) > 0)
                {
                    $getUserDetail = $this->db->query('select * from user where aadhar_id="'.$getIfPersonAvailable[0]['aadhar_id'].'"')->result_array();   
                }else{
                    $getUserDetail = array();
                }
                if(count($getUserDetail) > 0)
                {
                    $isAadharCorrect = 1;
                    $isMissing = 0; 
                    $personName = $getUserDetail[0]['aadharname'];
                    $gender = $getUserDetail[0]['gender'];
                    $aadhar = $getUserDetail[0]['aadhar_id'];
                    $from=new DateTime(date('Y-m-d'));
                    $to   = new DateTime($getUserDetail[0]['dob']);
                    $age = ($from->diff($to)->y).'- Years';
                    $address = $getUserDetail[0]['vtc'].','.$getUserDetail[0]['state'];
                    if(count($getIfPersonAvailable) == 0)
                    {
                        $userphoto = base_url().''.(($getUserDetail[0]['facematchphoto'] != NULL) ? $getUserDetail[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                    }   
                }
            }
            if($confidence > 83)
            {
                $insertdata = array(
                    'inActivePhoto' => $newImagePath,
                    'isPersonFound' => $isUserFound,
                    'isMissing' => $isMissing,
                    'idNumber' => $_POST['idNumber'],
                    'idType' => $_POST['idType'],
                    'response' => $faceResponse
                );
                $this->db->where('Id',$_SESSION['checkId']);
                $update = $this->db->update('checkperson',$insertdata);
                if($update)
                {
                    if($isAadharCorrect == 1)
                    {
                        $response = array(
                            'status' => 'success',
                            'personName' => $personName,
                            'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                            'gender' => strtolower($gender),
                            'age' => $age,
                            'address' => $address,
                            'isAadharCorrect' => $isAadharCorrect,
                            'isDobCorrect' => 1,
                            'isGenderCorrect' => 1,
                            'message' => 'Person Found',
                            'isVisible' => $isVisible,
                            'isMissing' => $isMissing,
                            'isVerified' => $isVerified,
                            'isRegistered' => $isUserFound,
                            'image' => $userphoto
                        );
                        echo json_encode($response);   
                    }else{
                        $response = array(
                            'status' => 'incorrect',
                            'isAadharCorrect' => $isAadharCorrect,
                            'isDobCorrect' => 1,
                            'isGenderCorrect' => 1,
                        );
                        echo json_encode($response);   
                    }
                }else{
                    $response = array(
                        'status' => 'error',
                        'message' => 'Something Went Wrong'
                    );
                    echo json_encode($response);
                }
            }else{
                $insertdata = array(
                    'inActivePhoto' => $newImagePath,
                    'response' => $faceResponse
                );   
                $this->db->where('Id',$_SESSION['checkId']);
                $update = $this->db->update('checkperson',$insertdata);
                $response = array(
                    'status' => 'error',
                    'message' => 'Face Not Matched'
                );
                echo json_encode($response);    
            }
        }
        if($_POST['idType'] == 'voter')
        {
            $idNumber = $_POST['idNumber'];
            $getIfAlready = $this->db->query('select * from voterslist where voterNumber="'.$idNumber.'"')->result_array();
            if(count($getIfAlready) > 0)
            {
                $getIfPersonAvailable = $this->db->query('select * from user where uid='.$getIfAlready[0]['userId'])->result_array();   
            }else{
                $getIfPersonAvailable = array();
            }
            $userphoto = '';
            if(count($getIfPersonAvailable) > 0)
            {
                $curl = curl_init();
                curl_setopt_array($curl, array(
                  CURLOPT_URL => 'fmatch.shammtech.in',
                  CURLOPT_RETURNTRANSFER => true,
                  CURLOPT_ENCODING => '',
                  CURLOPT_MAXREDIRS => 10,
                  CURLOPT_TIMEOUT => 0,
                  CURLOPT_FOLLOWLOCATION => true,
                  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                  CURLOPT_CUSTOMREQUEST => 'POST',
                  CURLOPT_POSTFIELDS => 'image1='.base_url().''.$getIfPersonAvailable[0]['facematchphoto'].'&image2='.base_url().''.$newImagePath,
                  CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/x-www-form-urlencoded'
                  ),
                ));
                $response = json_decode(curl_exec($curl),true);
                if($response['message'] != 'Internal Server Error')
                {
                    $confidence = $response['confidence'];   
                }
                $isAadharCorrect = 1;
                $isVisible = $getIfPersonAvailable[0]['visibility'];
                $isVerified = 1;
                $isUserFound = 1;
                $personName = $getIfPersonAvailable[0]['aadharname'];
                $gender = $getIfPersonAvailable[0]['gender'];
                $aadhar = $getIfPersonAvailable[0]['aadhar_id'];
                $from=new DateTime(date('Y-m-d'));
                $to   = new DateTime($getIfPersonAvailable[0]['dob']);
                $age = ($from->diff($to)->y).'- Years';
                $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                $userphoto = base_url().''.(($getIfPersonAvailable[0]['aadharphoto'] != NULL) ? $getIfPersonAvailable[0]['aadharphoto'] : $getIfPersonAvailable[0]['facematchphoto']);
            }
            if(count($getIfPersonAvailable) > 0)
            {
                $getMissingPerson = $this->db->query('select * from missingperson where missingaadhar="'.$getIfPersonAvailable[0]['aadhar_id'].'" and isFound != 1')->result_array();   
            }else{
                $getMissingPerson = array();
            }
            if(count($getMissingPerson) > 0)
            {
                $isAadharCorrect = 1;
                if($getMissingPerson[0]['missinggender'] != NULL)
                {
                    $isMissing = 1;
                    $personName = $getMissingPerson[0]['missingname'];
                    $gender = $getMissingPerson[0]['missinggender'];
                    $aadhar = $getMissingPerson[0]['missingaadhar'];
                    $from=new DateTime(date('Y-m-d'));
                    $to   = new DateTime($getMissingPerson[0]['missingdob']);
                    $age = ($from->diff($to)->y).'- Years';
                    if(count($getIfPersonAvailable) > 0)
                    {
                        $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                    }else{
                        $address = $getMissingPerson[0]['fathercity'].','.$getMissingPerson[0]['fatherstate'];
                    }
                    if(count($getIfPersonAvailable) == 0)
                    {
                        $curl = curl_init();
                        curl_setopt_array($curl, array(
                          CURLOPT_URL => 'fmatch.shammtech.in',
                          CURLOPT_RETURNTRANSFER => true,
                          CURLOPT_ENCODING => '',
                          CURLOPT_MAXREDIRS => 10,
                          CURLOPT_TIMEOUT => 0,
                          CURLOPT_FOLLOWLOCATION => true,
                          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                          CURLOPT_CUSTOMREQUEST => 'POST',
                          CURLOPT_POSTFIELDS => 'image1='.base_url().''.$getMissingPerson[0]['facematchphoto'].'&image2='.base_url().''.$newImagePath,
                          CURLOPT_HTTPHEADER => array(
                            'Content-Type: application/x-www-form-urlencoded'
                          ),
                        ));
                        $response = json_decode(curl_exec($curl),true);
                        if($response['message'] != 'Internal Server Error')
                        {
                            $confidence = $response['confidence'];   
                        }
                        $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                    }   
                }else{
                    $getFullDetail = $this->db->query('select * from missingpersondetail where missingId='.$getMissingPerson[0]['Id'])->result_array();
                    if(count($getFullDetail) > 0)
                    {
                        $isMissing = 1; 
                        $personName = $getMissingPerson[0]['missingname'];
                        $gender = $getMissingPerson[0]['missinggender'];
                        $aadhar = $getMissingPerson[0]['missingaadhar'];
                        $from=new DateTime(date('Y-m-d'));
                        $to   = new DateTime($getMissingPerson[0]['missingdob']);
                        $age = ($from->diff($to)->y).'- Years';
                        if(count($getIfPersonAvailable) > 0)
                        {
                            $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                        }else{
                            $address = $getMissingPerson[0]['fathercity'].','.$getMissingPerson[0]['fatherstate'];
                        }
                        if(count($getIfPersonAvailable) == 0)
                        {
                            $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                        }   
                    }else{
                        $getUserDetail = $this->db->query('select * from user where aadhar_id="'.$getIfPersonAvailable[0]['aadhar_id'].'"')->result_array();
                        if(count($getUserDetail) > 0)
                        {
                            $isMissing = 1; 
                            $personName = $getUserDetail[0]['aadharname'];
                            $gender = $getUserDetail[0]['gender'];
                            $aadhar = $getUserDetail[0]['aadhar_id'];
                            $from=new DateTime(date('Y-m-d'));
                            $to   = new DateTime($getUserDetail[0]['dob']);
                            $age = ($from->diff($to)->y).'- Years';
                            $address = $getUserDetail[0]['vtc'].','.$getUserDetail[0]['state'];
                            if(count($getIfPersonAvailable) == 0)
                            {
                                $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                            }   
                        }
                    }
                }
            }else{
                if(count($getIfPersonAvailable) > 0)
                {
                    $getUserDetail = $this->db->query('select * from user where aadhar_id="'.$getIfPersonAvailable[0]['aadhar_id'].'"')->result_array();   
                }else{
                    $getUserDetail = array();
                }
                if(count($getUserDetail) > 0)
                {
                    $isAadharCorrect = 1;
                    $isMissing = 0; 
                    $personName = $getUserDetail[0]['aadharname'];
                    $gender = $getUserDetail[0]['gender'];
                    $aadhar = $getUserDetail[0]['aadhar_id'];
                    $from=new DateTime(date('Y-m-d'));
                    $to   = new DateTime($getUserDetail[0]['dob']);
                    $age = ($from->diff($to)->y).'- Years';
                    $address = $getUserDetail[0]['vtc'].','.$getUserDetail[0]['state'];
                    if(count($getIfPersonAvailable) == 0)
                    {
                        $userphoto = base_url().''.(($getUserDetail[0]['facematchphoto'] != NULL) ? $getUserDetail[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                    }   
                }
            }
            if($confidence > 83)
            {
                $insertdata = array(
                    'inActivePhoto' => $newImagePath,
                    'isPersonFound' => $isUserFound,
                    'isMissing' => $isMissing,
                    'idNumber' => $_POST['idNumber'],
                    'idType' => $_POST['idType'],
                    'response' => $faceResponse
                );
                $this->db->where('Id',$_SESSION['checkId']);
                $update = $this->db->update('checkperson',$insertdata);
                if($update)
                {
                    if($isAadharCorrect == 1)
                    {
                        $response = array(
                            'status' => 'success',
                            'personName' => $personName,
                            'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                            'gender' => strtolower($gender),
                            'age' => $age,
                            'address' => $address,
                            'isAadharCorrect' => $isAadharCorrect,
                            'isDobCorrect' => 1,
                            'isGenderCorrect' => 1,
                            'message' => 'Person Found',
                            'isVisible' => $isVisible,
                            'isMissing' => $isMissing,
                            'isVerified' => $isVerified,
                            'isRegistered' => $isUserFound,
                            'image' => $userphoto
                        );
                        echo json_encode($response);   
                    }else{
                        $response = array(
                            'status' => 'incorrect',
                            'isAadharCorrect' => $isAadharCorrect,
                            'isDobCorrect' => 1,
                            'isGenderCorrect' => 1,
                        );
                        echo json_encode($response);   
                    }
                }else{
                    $response = array(
                        'status' => 'error',
                        'message' => 'Something Went Wrong'
                    );
                    echo json_encode($response);
                }
            }else{
                $insertdata = array(
                    'inActivePhoto' => $newImagePath,
                    'response' => $faceResponse
                );   
                $this->db->where('Id',$_SESSION['checkId']);
                $update = $this->db->update('checkperson',$insertdata);
                $response = array(
                    'status' => 'error',
                    'message' => 'Face Not Matched'
                );
                echo json_encode($response);    
            }
        }
        if($_POST['idType'] == 'pan')
        {
            $idNumber = $_POST['idNumber'];
            $getIfAlready = $this->db->query('select * from panlist where panNumber="'.$idNumber.'"')->result_array();
            if(count($getIfAlready) > 0)
            {
                $getIfPersonAvailable = $this->db->query('select * from user where uid='.$getIfAlready[0]['userId'])->result_array();   
            }else{
                $getIfPersonAvailable = array();
            }
            $userphoto = '';
            if(count($getIfPersonAvailable) > 0)
            {
                $curl = curl_init();
                curl_setopt_array($curl, array(
                  CURLOPT_URL => 'fmatch.shammtech.in',
                  CURLOPT_RETURNTRANSFER => true,
                  CURLOPT_ENCODING => '',
                  CURLOPT_MAXREDIRS => 10,
                  CURLOPT_TIMEOUT => 0,
                  CURLOPT_FOLLOWLOCATION => true,
                  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                  CURLOPT_CUSTOMREQUEST => 'POST',
                  CURLOPT_POSTFIELDS => 'image1='.base_url().''.$getIfPersonAvailable[0]['facematchphoto'].'&image2='.base_url().''.$newImagePath,
                  CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/x-www-form-urlencoded'
                  ),
                ));
                $response = json_decode(curl_exec($curl),true);
                if($response['message'] != 'Internal Server Error')
                {
                    $confidence = $response['confidence'];   
                }
                $isAadharCorrect = 1;
                $isVisible = $getIfPersonAvailable[0]['visibility'];
                $isVerified = 1;
                $isUserFound = 1;
                $personName = $getIfPersonAvailable[0]['aadharname'];
                $gender = $getIfPersonAvailable[0]['gender'];
                $aadhar = $getIfPersonAvailable[0]['aadhar_id'];
                $from=new DateTime(date('Y-m-d'));
                $to   = new DateTime($getIfPersonAvailable[0]['dob']);
                $age = ($from->diff($to)->y).'- Years';
                $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                $userphoto = base_url().''.(($getIfPersonAvailable[0]['aadharphoto'] != NULL) ? $getIfPersonAvailable[0]['aadharphoto'] : $getIfPersonAvailable[0]['facematchphoto']);
            }
            if(count($getIfPersonAvailable) > 0)
            {
                $getMissingPerson = $this->db->query('select * from missingperson where missingaadhar="'.$getIfPersonAvailable[0]['aadhar_id'].'" and isFound != 1')->result_array();   
            }else{
                $getMissingPerson = array();
            }
            if(count($getMissingPerson) > 0)
            {
                $isAadharCorrect = 1;
                if($getMissingPerson[0]['missinggender'] != NULL)
                {
                    $isMissing = 1;
                    $personName = $getMissingPerson[0]['missingname'];
                    $gender = $getMissingPerson[0]['missinggender'];
                    $aadhar = $getMissingPerson[0]['missingaadhar'];
                    $from=new DateTime(date('Y-m-d'));
                    $to   = new DateTime($getMissingPerson[0]['missingdob']);
                    $age = ($from->diff($to)->y).'- Years';
                    if(count($getIfPersonAvailable) > 0)
                    {
                        $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                    }else{
                        $address = $getMissingPerson[0]['fathercity'].','.$getMissingPerson[0]['fatherstate'];
                    }
                    if(count($getIfPersonAvailable) == 0)
                    {
                        $curl = curl_init();
                        curl_setopt_array($curl, array(
                          CURLOPT_URL => 'fmatch.shammtech.in',
                          CURLOPT_RETURNTRANSFER => true,
                          CURLOPT_ENCODING => '',
                          CURLOPT_MAXREDIRS => 10,
                          CURLOPT_TIMEOUT => 0,
                          CURLOPT_FOLLOWLOCATION => true,
                          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                          CURLOPT_CUSTOMREQUEST => 'POST',
                          CURLOPT_POSTFIELDS => 'image1='.base_url().''.$getIfPersonAvailable[0]['facematchphoto'].'&image2='.base_url().''.$newImagePath,
                          CURLOPT_HTTPHEADER => array(
                            'Content-Type: application/x-www-form-urlencoded'
                          ),
                        ));
                        $response = json_decode(curl_exec($curl),true);
                        if($response['message'] != 'Internal Server Error')
                        {
                            $confidence = $response['confidence'];   
                        }
                        $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                    }   
                }else{
                    $getFullDetail = $this->db->query('select * from missingpersondetail where missingId='.$getMissingPerson[0]['Id'])->result_array();
                    if(count($getFullDetail) > 0)
                    {
                        $isMissing = 1; 
                        $personName = $getMissingPerson[0]['missingname'];
                        $gender = $getMissingPerson[0]['missinggender'];
                        $aadhar = $getMissingPerson[0]['missingaadhar'];
                        $from=new DateTime(date('Y-m-d'));
                        $to   = new DateTime($getMissingPerson[0]['missingdob']);
                        $age = ($from->diff($to)->y).'- Years';
                        if(count($getIfPersonAvailable) > 0)
                        {
                            $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                        }else{
                            $address = $getMissingPerson[0]['fathercity'].','.$getMissingPerson[0]['fatherstate'];
                        }
                        if(count($getIfPersonAvailable) == 0)
                        {
                            $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                        }   
                    }else{
                        $getUserDetail = $this->db->query('select * from user where aadhar_id="'.$getIfPersonAvailable[0]['aadhar_id'].'"')->result_array();
                        if(count($getUserDetail) > 0)
                        {
                            $isMissing = 1; 
                            $personName = $getUserDetail[0]['aadharname'];
                            $gender = $getUserDetail[0]['gender'];
                            $aadhar = $getUserDetail[0]['aadhar_id'];
                            $from=new DateTime(date('Y-m-d'));
                            $to   = new DateTime($getUserDetail[0]['dob']);
                            $age = ($from->diff($to)->y).'- Years';
                            $address = $getUserDetail[0]['vtc'].','.$getUserDetail[0]['state'];
                            if(count($getIfPersonAvailable) == 0)
                            {
                                $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                            }   
                        }
                    }
                }
            }else{
                if(count($getIfPersonAvailable) > 0)
                {
                    $getUserDetail = $this->db->query('select * from user where aadhar_id="'.$getIfPersonAvailable[0]['aadhar_id'].'"')->result_array();   
                }else{
                    $getUserDetail = array();
                }
                if(count($getUserDetail) > 0)
                {
                    $isAadharCorrect = 1;
                    $isMissing = 0; 
                    $personName = $getUserDetail[0]['aadharname'];
                    $gender = $getUserDetail[0]['gender'];
                    $aadhar = $getUserDetail[0]['aadhar_id'];
                    $from=new DateTime(date('Y-m-d'));
                    $to   = new DateTime($getUserDetail[0]['dob']);
                    $age = ($from->diff($to)->y).'- Years';
                    $address = $getUserDetail[0]['vtc'].','.$getUserDetail[0]['state'];
                    if(count($getIfPersonAvailable) == 0)
                    {
                        $userphoto = base_url().''.(($getUserDetail[0]['facematchphoto'] != NULL) ? $getUserDetail[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                    }   
                }
            }
            if($confidence > 83)
            {
                $insertdata = array(
                    'inActivePhoto' => $newImagePath,
                    'isPersonFound' => $isUserFound,
                    'isMissing' => $isMissing,
                    'idNumber' => $_POST['idNumber'],
                    'idType' => $_POST['idType'],
                    'response' => $faceResponse
                );
                $this->db->where('Id',$_SESSION['checkId']);
                $update = $this->db->update('checkperson',$insertdata);
                if($update)
                {
                    if($isAadharCorrect == 1)
                    {
                        $response = array(
                            'status' => 'success',
                            'personName' => $personName,
                            'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                            'gender' => strtolower($gender),
                            'age' => $age,
                            'address' => $address,
                            'isAadharCorrect' => $isAadharCorrect,
                            'isDobCorrect' => 1,
                            'isGenderCorrect' => 1,
                            'message' => 'Person Found',
                            'isVisible' => $isVisible,
                            'isMissing' => $isMissing,
                            'isVerified' => $isVerified,
                            'isRegistered' => $isUserFound,
                            'image' => $userphoto
                        );
                        echo json_encode($response);   
                    }else{
                        $response = array(
                            'status' => 'incorrect',
                            'isAadharCorrect' => $isAadharCorrect,
                            'isDobCorrect' => 1,
                            'isGenderCorrect' => 1,
                        );
                        echo json_encode($response);   
                    }
                }else{
                    $response = array(
                        'status' => 'error',
                        'message' => 'Something Went Wrong'
                    );
                    echo json_encode($response);
                }
            }else{
                $insertdata = array(
                    'inActivePhoto' => $newImagePath,
                    'response' => $faceResponse
                );   
                $this->db->where('Id',$_SESSION['checkId']);
                $update = $this->db->update('checkperson',$insertdata);
                $response = array(
                    'status' => 'error',
                    'message' => 'Face Not Matched'
                );
                echo json_encode($response);    
            }
        }
    }
  function filterUnknownPerson()
    {
        if(($_POST['startdate']) != '')
        {
            $this->db->where('dateCreated >=',date('Y-m-d 00:00:00',strtotime($_POST['startdate'])));
        }
        if(($_POST['enddate']) != '')
        {
            $this->db->where('dateCreated <=',date('Y-m-d 23:59:59',strtotime($_POST['enddate'])));
        }
        if(($_POST['personName']) != '')
        {
            $this->db->like('missingname',$_POST['personName']);
        }
        $this->db->where('isFound',0);
        $this->db->where('isFinalSubmitted',1);
        $result = $this->db->get('missingperson')->result_array();
        $finalId = array();
        if(count($result) > 0)
        {
            foreach($result as $k=>$v)
            {
                if(($_POST['gender']) != '')
                {
                    if($v['missinggender'] != '' || $v['missinggender'] != NULL)
                    {
                        if($v['missinggender'] == $_POST['gender'])
                        {
                            array_push($finalId,$v['Id']);
                        }
                    }else{
                        $getMissingPersonDetail = $this->db->query('select * from missingpersondetail where missingId='.$v['Id'])->result_array();
                        if(count($getMissingPersonDetail) > 0)
                        {
                            if($getMissingPersonDetail[0]['gender'] != '' || $getMissingPersonDetail[0]['missinggender'] != NULL)
                            {
                                if(strtolower($getMissingPersonDetail[0]['gender']) == strtolower($_POST['gender']))
                                {
                                    array_push($finalId,$v['Id']);
                                }
                            }else{
                                $getUserDetail = $this->db->query('select * from user where aadhar_id="'.$v['missingaadhar'].'"')->result_array();
                                if(count($getUserDetail) > 0)
                                {
                                    if($getUserDetail[0]['gender'] != '' || $getUserDetail[0]['gender'] != NULL)
                                    {
                                        if(strtolower($getUserDetail[0]['gender']) == strtolower($_POST['gender']))
                                        {
                                            array_push($finalId,$v['Id']);
                                        }
                                    }
                                }
                            }       
                        }else{
                            $getUserDetail = $this->db->query('select * from user where aadhar_id="'.$v['missingaadhar'].'"')->result_array();
                            if(count($getUserDetail) > 0)
                            {
                                if($getUserDetail[0]['gender'] != '' || $getUserDetail[0]['gender'] != NULL)
                                {
                                    if(strtolower($getUserDetail[0]['gender']) == strtolower($_POST['gender']))
                                    {
                                        array_push($finalId,$v['Id']);
                                    }
                                }
                            }
                        }
                    }
                }      
                if(($_POST['fatherName']) != '')
                {
                    $getMissingPersonDetail = $this->db->query('select * from missingpersondetail where missingId='.$v['Id'])->result_array();
                    if(count($getMissingPersonDetail) > 0)
                    {
                        if($getMissingPersonDetail[0]['fatherName'] != '' || $getMissingPersonDetail[0]['fatherName'] != NULL)
                        {
                            if(strtolower($getMissingPersonDetail[0]['fatherName']) == strtolower($_POST['fatherName']))
                            {
                                array_push($finalId,$v['Id']);
                            }
                        }else{
                            $getUserDetail = $this->db->query('select * from user where aadhar_id="'.$v['missingaadhar'].'"')->result_array();
                            if(count($getUserDetail) > 0)
                            {
                                if($getUserDetail[0]['careof'] != '' || $getUserDetail[0]['careof'] != NULL)
                                {
                                    $explode = explode(" ", $getUserDetail[0]['careof'],2);
                                    if(strtolower($explode[1]) == strtolower($_POST['fatherName']))
                                    {
                                        array_push($finalId,$v['Id']);
                                    }
                                }
                            }
                        }       
                    }else{
                        $getUserDetail = $this->db->query('select * from user where aadhar_id="'.$v['missingaadhar'].'"')->result_array();
                        if(count($getUserDetail) > 0)
                        {
                            if($getUserDetail[0]['careof'] != '' || $getUserDetail[0]['careof'] != NULL)
                            {
                                $explode = explode(" ", $getUserDetail[0]['careof'],2);
                                if(strtolower($explode[1]) == strtolower($_POST['fatherName']))
                                {
                                    array_push($finalId,$v['Id']);
                                }
                            }
                        }
                    }
                }      
                if(($_POST['dob']) != '')
                {
                    $_POST['dob'] = date('Y-m-d',strtotime($_POST['dob']));
                    if($v['missingdob'] != '' || $v['missingdob'] != NULL)
                    {
                        if($v['missingdob'] == $_POST['dob'])
                        {
                            array_push($finalId,$v['Id']);
                        }
                    }else{
                        $getMissingPersonDetail = $this->db->query('select * from missingpersondetail where missingId='.$v['Id'])->result_array();
                        if(count($getMissingPersonDetail) > 0)
                        {
                            if($getMissingPersonDetail[0]['dob'] != '' || $getMissingPersonDetail[0]['dob'] != NULL)
                            {
                                if(strtolower($getMissingPersonDetail[0]['dob']) == strtolower($_POST['dob']))
                                {
                                    array_push($finalId,$v['Id']);
                                }
                            }else{
                                $getUserDetail = $this->db->query('select * from user where aadhar_id="'.$v['missingaadhar'].'"')->result_array();
                                if(count($getUserDetail) > 0)
                                {
                                    if($getUserDetail[0]['dob'] != '' || $getUserDetail[0]['dob'] != NULL)
                                    {
                                        if($getUserDetail[0]['dob'] == $_POST['dob'])
                                        {
                                            array_push($finalId,$v['Id']);
                                        }
                                    }
                                }
                            }       
                        }else{
                            $getUserDetail = $this->db->query('select * from user where aadhar_id="'.$v['missingaadhar'].'"')->result_array();
                            if(count($getUserDetail) > 0)
                            {
                                if($getUserDetail[0]['dob'] != '' || $getUserDetail[0]['dob'] != NULL)
                                {
                                    if($getUserDetail[0]['dob'] == $_POST['dob'])
                                    {
                                        array_push($finalId,$v['Id']);
                                    }
                                }
                            }
                        }
                    }
                }      
                if($_POST['gender'] == '' && $_POST['fatherName'] == '' && $_POST['dob'] == '')
                {
                    array_push($finalId,$v['Id']);
                }
            }
            $finalId = array_unique($finalId);
        }
        if(count($finalId) > 0)
        {
            $this->db->where_in('Id', $finalId);
            $data = $this->db->get('missingperson')->result_array();
            foreach($data as $k=>$v)
            {
                $getUserDetail = $this->db->query('select * from user where aadhar_id="'.$v['missingaadhar'].'"')->result_array();
                if(count($getUserDetail) > 0)
                {
                    $finaldata[] = array(
                        'gender' => ($getUserDetail[0]['gender']),
                        'facematchphoto' => (($v['facematchphoto'] != NULL) ? $v['facematchphoto'] : $getUserDetail[0]['facematchphoto']),
                        'dateCreated' => date('d-m-Y',strtotime($v['dateCreated'])),
                        'personName' => $v['missingname'],
                        'Id' => $v['Id']
                    );      
                }else{
                    $getPersonDetail = $this->db->query('select * from missingpersondetail where missingId='.$v['Id'])->result_array();
                    $finaldata[] = array(
                        'gender' => (($v['missinggender'] != NULL) ? $v['missinggender'] : $getPersonDetail[0]['gender']),
                        'facematchphoto' => $v['facematchphoto'],
                        'dateCreated' => date('d-m-Y',strtotime($v['dateCreated'])),
                        'personName' => $v['missingname'],
                        'Id' => $v['Id']
                    );
                }
            }
            $page_data['finaldata'] = $finaldata;
        }else{
            $page_data['finaldata'] = array();
        }
        $page_data['page_name'] = 'filter_unknown_person';
        $page_data['title'] = 'Unknown Person';
        $this->load->view('police/index', $page_data);
    }
          

}
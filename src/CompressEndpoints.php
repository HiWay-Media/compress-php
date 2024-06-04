<? php
//
const COMPRESS_API_URL       = "https://api-compress.hiway.media";    
//
class COMPRESS_ENDPOINTS {
    // Added tangram endoints
    const CATEGORIES_URL                = COMPRESS_API_URL."/api/v4.0/external/upload/categories"; // /create
    const CREATE_CATEGORY               = COMPRESS_ENDPOINTS::CATEGORIES_URL."/create";
    // Restreamers
    const GET_RESTREAMERS               = COMPRESS_API_URL."/api/v4.0/external/restreamers";
    const GET_RUNNING_INSTANCES         = COMPRESS_ENDPOINTS::GET_RESTREAMERS . "/running_instances";
    const GET_RUNNING_SINGLE_INSTANCE   = COMPRESS_ENDPOINTS::GET_RESTREAMERS . "/single_instance";
    const SCALE_RESTREAMER              = COMPRESS_ENDPOINTS::GET_RESTREAMERS . "/scale_instance";
    const RESTREAMER_HLS_START          = COMPRESS_ENDPOINTS::GET_RESTREAMERS . "/hls/start";
    const RESTREAMER_HLS_STOP           = COMPRESS_ENDPOINTS::GET_RESTREAMERS . "/hls/stop";
    const RESTREAMER_PUSH_START         = COMPRESS_ENDPOINTS::GET_RESTREAMERS . "/push/start";
    const RESTREAMER_PUSH_STOP          = COMPRESS_ENDPOINTS::GET_RESTREAMERS . "/push/stop";
    const RESTREAMER_PULL_START         = COMPRESS_ENDPOINTS::GET_RESTREAMERS . "/pull/start";
    const RESTREAMER_PULL_STOP          = COMPRESS_ENDPOINTS::GET_RESTREAMERS . "/pull/stop";
    # Uploads
    const GET_UPLOADS                   = COMPRESS_API_URL."/api/v4.0/external/upload";
    const GET_PUBLISHED_UPLOADS         = COMPRESS_ENDPOINTS::GET_UPLOADS . "/get_published";
    const PUBLISH_UPLOAD                = COMPRESS_ENDPOINTS::GET_UPLOADS . "/set_published";
    const CREATE_UPLOAD                 = COMPRESS_ENDPOINTS::GET_UPLOADS . "/create";
    const PRESIGNED_URL_S3              = COMPRESS_API_URL . "/api/v4.0/external/upload/presignedUrl";
    const ADD_VIDEO_THUMB               = COMPRESS_ENDPOINTS::GET_UPLOADS . "/add_thumb";
    const S3_SPACE                      = COMPRESS_ENDPOINTS::GET_UPLOADS . "/s3_space";
    //
    # Customers
    const CUSTOMERS                      = COMPRESS_API_URL . "/api/v4.0/external/customers";
    const GET_CUSTOMER_ZONE              = COMPRESS_ENDPOINTS::CUSTOMERS . "/s3";
    # Events 
    const EVENTS_EXTERNAL                = COMPRESS_API_URL. "/api/v4.0/external/events";
    const BULK_EVENTS_CREATE             = COMPRESS_ENDPOINTS::EVENTS_EXTERNAL . "/create_bulk";
    //
}
//
?>

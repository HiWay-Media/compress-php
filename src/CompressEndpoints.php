<? php
//
const COMPRESS_API_URL       = "https://api-compress.hiway.media";    
//
class COMPRESS_ENDPOINTS {
    // Added tangram endoints
    const CATEGORIES_URL                = COMPRESS_API_URL."/api/v4.0/external/upload/categories"; // /create
    const CREATE_CATEGORY               = COMPRESS_ENDPOINTS::CATEGORIES_URL."/create";
    //
    const GET_RESTREAMERS               = COMPRESS_API_URL."/api/v4.0/external/restreamers";
    const GET_RUNNING_INSTANCES         = COMPRESS_ENDPOINTS::GET_RESTREAMERS."/running_instances";
    const GET_RUNNING_SINGLE_INSTANCE   = COMPRESS_ENDPOINTS::GET_RESTREAMERS."/single_instance";
    const GET_UPLOADS                   = COMPRESS_API_URL."/api/v4.0/external/upload";
    const GET_PUBLISHED_UPLOADS         = COMPRESS_ENDPOINTS::GET_UPLOADS . "/get_published";
    const PUBLISH_UPLOAD                = COMPRESS_ENDPOINTS::GET_UPLOADS ."/set_published";
    const CREATE_UPLOAD                 = COMPRESS_ENDPOINTS::GET_UPLOADS ."/create";
    const PRESIGNED_URL_S3              = COMPRESS_API_URL."/api/v4.0/external/upload/presignedUrl";
    const ADD_VIDEO_THUMB               = COMPRESS_ENDPOINTS::GET_UPLOADS ."/add_thumb";
    const S3_SPACE                      = COMPRESS_ENDPOINTS::GET_UPLOADS ."/s3_space";
    //
}
//
?>

<?php
 function storeImage($folder, $file_name, $is_file = null)
    {
        if ($is_file) {
            $file = $file_name;
        } else {
            if (!request()->hasFile($file_name)) return null;

            $file = request()->file($file_name);
        }
        return Storage::disk('public')->put($folder, $file);
    }
function upload_url()
{
    return base_path() . '/assets/upload';
}
function response_api($status, $statusCode, $message, $data ,$page_number =null,$total_pages  =null,$total_records  =null)
{
    if ($page_number !=null)
        return response()->json(['status' => $status, 'statusCode' => $statusCode, 'message' => $message, 'items' => ['data' =>$data,
            'page_number' =>$page_number, 'total_pages' =>$total_pages, 'total_records' =>$total_records]]);
    else
        return response()->json(['status' => $status, 'statusCode' => $statusCode, 'message' => $message, 'items'=>$data]);
}
?>

<?php

function fileUpload($fileObject, $folderName = null, $oldFilePath = null)
{
    if ($fileObject)
    {
        if ($oldFilePath && file_exists(public_path($oldFilePath)))
        {
            unlink(public_path($oldFilePath));
        }

        $fileName       = rand(10, 999999999).time().'.'.$fileObject->getClientOriginalExtension();
        $fileDirectory  = 'admin/uploaded-files/'.$folderName.'/';
        $fileObject->move(public_path($fileDirectory), $fileName);
        $fileUrl        = $fileDirectory.$fileName;
    } else {
        if ($oldFilePath)
        {
            $fileUrl = $oldFilePath;
        } else {
            $fileUrl = null;
        }
    }

    return $fileUrl;
}





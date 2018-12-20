<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getImageBase64() 获取用于人脸比对的照片，图片的BASE64值；
BASE64编码后的图片数据大小不超过3M，仅支持jpg、png格式。
 * @method void setImageBase64(string $ImageBase64) 设置用于人脸比对的照片，图片的BASE64值；
BASE64编码后的图片数据大小不超过3M，仅支持jpg、png格式。
 * @method string getVideoBase64() 获取用于活体检测的视频，视频的BASE64值；
BASE64编码后的大小不超过5M，支持mp4、avi、flv格式。
 * @method void setVideoBase64(string $VideoBase64) 设置用于活体检测的视频，视频的BASE64值；
BASE64编码后的大小不超过5M，支持mp4、avi、flv格式。
 * @method string getLivenessType() 获取活体检测类型，取值：LIP/ACTION/SILENT。
LIP为数字模式，ACTION为动作模式，SILENT为静默模式，三种模式选择一种传入。
 * @method void setLivenessType(string $LivenessType) 设置活体检测类型，取值：LIP/ACTION/SILENT。
LIP为数字模式，ACTION为动作模式，SILENT为静默模式，三种模式选择一种传入。
 * @method string getValidateData() 获取数字模式传参：唇语验证码(1234)，需先获取唇语验证码；
动作模式传参：传动作顺序(12,21)，需先获取动作顺序；
静默模式传参：空。
 * @method void setValidateData(string $ValidateData) 设置数字模式传参：唇语验证码(1234)，需先获取唇语验证码；
动作模式传参：传动作顺序(12,21)，需先获取动作顺序；
静默模式传参：空。
 * @method string getOptional() 获取本接口不需要传递此参数。
 * @method void setOptional(string $Optional) 设置本接口不需要传递此参数。
 */

/**
 *LivenessCompare请求参数结构体
 */
class LivenessCompareRequest extends AbstractModel
{
    /**
     * @var string 用于人脸比对的照片，图片的BASE64值；
BASE64编码后的图片数据大小不超过3M，仅支持jpg、png格式。
     */
    public $ImageBase64;

    /**
     * @var string 用于活体检测的视频，视频的BASE64值；
BASE64编码后的大小不超过5M，支持mp4、avi、flv格式。
     */
    public $VideoBase64;

    /**
     * @var string 活体检测类型，取值：LIP/ACTION/SILENT。
LIP为数字模式，ACTION为动作模式，SILENT为静默模式，三种模式选择一种传入。
     */
    public $LivenessType;

    /**
     * @var string 数字模式传参：唇语验证码(1234)，需先获取唇语验证码；
动作模式传参：传动作顺序(12,21)，需先获取动作顺序；
静默模式传参：空。
     */
    public $ValidateData;

    /**
     * @var string 本接口不需要传递此参数。
     */
    public $Optional;
    /**
     * @param string $ImageBase64 用于人脸比对的照片，图片的BASE64值；
BASE64编码后的图片数据大小不超过3M，仅支持jpg、png格式。
     * @param string $VideoBase64 用于活体检测的视频，视频的BASE64值；
BASE64编码后的大小不超过5M，支持mp4、avi、flv格式。
     * @param string $LivenessType 活体检测类型，取值：LIP/ACTION/SILENT。
LIP为数字模式，ACTION为动作模式，SILENT为静默模式，三种模式选择一种传入。
     * @param string $ValidateData 数字模式传参：唇语验证码(1234)，需先获取唇语验证码；
动作模式传参：传动作顺序(12,21)，需先获取动作顺序；
静默模式传参：空。
     * @param string $Optional 本接口不需要传递此参数。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ImageBase64",$param) and $param["ImageBase64"] !== null) {
            $this->ImageBase64 = $param["ImageBase64"];
        }

        if (array_key_exists("VideoBase64",$param) and $param["VideoBase64"] !== null) {
            $this->VideoBase64 = $param["VideoBase64"];
        }

        if (array_key_exists("LivenessType",$param) and $param["LivenessType"] !== null) {
            $this->LivenessType = $param["LivenessType"];
        }

        if (array_key_exists("ValidateData",$param) and $param["ValidateData"] !== null) {
            $this->ValidateData = $param["ValidateData"];
        }

        if (array_key_exists("Optional",$param) and $param["Optional"] !== null) {
            $this->Optional = $param["Optional"];
        }
    }
}

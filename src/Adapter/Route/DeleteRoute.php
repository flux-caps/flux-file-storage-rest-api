<?php

namespace FluxFileStorageRestApi\Adapter\Route;

use FluxFileStorageRestApi\Libs\FluxFileStorageApi\Adapter\Api\FileStorageApi;
use FluxFileStorageRestApi\Libs\FluxRestApi\Method\DefaultMethod;
use FluxFileStorageRestApi\Libs\FluxRestApi\Method\Method;
use FluxFileStorageRestApi\Libs\FluxRestApi\Request\RequestDto;
use FluxFileStorageRestApi\Libs\FluxRestApi\Response\ResponseDto;
use FluxFileStorageRestApi\Libs\FluxRestApi\Route\Route;

class DeleteRoute implements Route
{

    private function __construct(
        private readonly FileStorageApi $file_storage_api
    ) {

    }


    public static function new(
        FileStorageApi $file_storage_api
    ) : static {
        return new static(
            $file_storage_api
        );
    }


    public function getDocuRequestBodyTypes() : ?array
    {
        return null;
    }


    public function getDocuRequestQueryParams() : ?array
    {
        return null;
    }


    public function getMethod() : Method
    {
        return DefaultMethod::DELETE;
    }


    public function getRoute() : string
    {
        return "/delete/{path.}";
    }


    public function handle(RequestDto $request) : ?ResponseDto
    {
        $this->file_storage_api->delete(
            $request->getParam(
                "path"
            )
        );

        return null;
    }
}

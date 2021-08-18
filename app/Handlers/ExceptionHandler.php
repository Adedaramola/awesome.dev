<?php

namespace App\Handlers;

use Pecee\Http\Request;
use Pecee\SimpleRouter\Exceptions\NotFoundHttpException;
use Pecee\SimpleRouter\Handlers\IExceptionHandler;

class ExceptionHandler implements IExceptionHandler
{
    public function handleError(Request $request, \Exception $error): void
    {
        if ($request->getUrl()->contains('/api')) {
            response()->json([
                'error' => $error->getMessage(),
                'code' => $error->getCode(),
            ]);
        }

        if ($error instanceof NotFoundHttpException) {
            $request->setRewriteCallback('SiteController@notFound');
            return;
        }

        throw $error;
    }
}

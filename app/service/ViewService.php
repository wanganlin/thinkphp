<?php

namespace app\service;

use Exception;

class ViewService
{
    /**
     * @param Request $request
     * @return Renderable
     */
    public function render(Request $request): Renderable
    {
        $pathInfo = $request->path();
        if (empty($pathInfo)) {
            return view('frontend::index');
        }

        try {
            // DB SELECT
            $data = DB::table('posts')->where('segment', $pathInfo)->first();

            if (empty($data)) {
                return view('frontend::error');
            }

            return view('frontend::' . $data->template);
        } catch (Exception $e) {
            return view('frontend::error', [
                'code' => $e->getCode(),
                'message' => $e->getMessage(),
            ]);
        }
    }
}

<?php

namespace App\Traits;

trait ApiResponseTrait
{
    /**
     * Format API response berdasarkan kode HTTP.
     *
     * @param int    $code      // HTTP status code (e.g., 200, 400)
     * @param mixed  $data      // Response data (null jika error)
     * @param string $message   // Pesan sukses atau error
     * @param mixed  $errors    // Optional: Additional error details
     * @return \Illuminate\Http\JsonResponse
     */
    public function apiResponse($code, $data = null, $message = '', $errors = null)
    {
        // Tentukan status berdasarkan kode HTTP
        $status = $code >= 200 && $code < 300 ? 'success' : 'error';
        $success = $code >= 200 && $code < 300 ? true : false;

        // Format respons
        $response = [
            'success' => $success,
            'status' => $status,
            'message' => $message,
        ];

        // Tambahkan data jika sukses
        if ($status === 'success') {
            $response['data'] = $data;
        }

        // Tambahkan error detail jika ada
        if ($status === 'error' && $errors) {
            $response['errors'] = $errors;
        }

        return response()->json($response, $code);
    }
}

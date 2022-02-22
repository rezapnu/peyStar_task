<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use http\Env\Request;
use Illuminate\Support\Facades\Log;

class ApiController extends Controller
{

    public function getInfoTransaction(InfotransactionRequest $request)
    {

        $responseApiTransferTo = $this->sendDataByRest($request);

        $this->saveTransactionToDatabase($request, $responseApiTransferTo);

        return $responseApiTransferTo;

    }

    public function reportTransaction(Request $request)
    {
        $report = Transaction::where('create_at','>=',$request->fromDate)
            ->where('create_at','<=',$request->toDate)
            ->get();
        return $report;
    }

    private function sendDataByRest(InfotransactionRequest $request)
    {
        try {
            $clientId = '24544545667';
            $trackId = 'fsdgfgtt556u5767utyhjyutut';
            $url = "https://apibeta.finnotech.ir/oak/v2/clients/$clientId/transferTo?trackId=$trackId";

            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

            $headers = array(
                "Content-Type: application/json",
                "Authorization: Bearer {Token}",
            );
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

            $data = [
                'amount' => $request->amount,
                'description' => $request->description,
                'destinationFirstname' => $request->destinationFirstname,
                'destinationLastname' => $request->destinationLastname,
                'destinationNumber' => $request->destinationNumber,
                'paymentNumber' => $request->paymentNumber,
                'reasonDescription' => $request->reasonDescription,
                'deposit' => $request->deposit,
                'sourceFirstName' => $request->sourceFirstName,
                'sourceLastName' => $request->sourceLastName,
                'secondPassword' => $request->secondPassword,
            ];

            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            $response = curl_exec($curl);
            curl_close($curl);

            return $response;
        }
        catch (\Throwable $exception){
            log::error($exception->getMessage());
        }

    }

    private function saveTransactionToDatabase($request, $responseApiTransferTo)
    {
        try {
            Transaction::Create([
                'amount' => $request->amount,
                'description' => $request->description,
                'destinationFirstname' => $request->destinationFirstname,
                'destinationLastname' => $request->destinationLastname,
                'destinationNumber' => $request->destinationNumber,
                'paymentNumber' => $request->paymentNumber,
                'reasonDescription' => $request->reasonDescription,
                'deposit' => $request->deposit,
                'sourceFirstName' => $request->sourceFirstName,
                'sourceLastName' => $request->sourceLastName,
                'secondPassword' => $request->secondPassword,
                'status' => $responseApiTransferTo['status'],
                'responseApi' => json_encode($responseApiTransferTo),
            ]);
        }catch (\Throwable $exception){
            log::error($exception->getMessage());
        }

    }
}

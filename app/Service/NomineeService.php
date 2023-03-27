<?php

namespace App\Service;

use App\Entity\CILOrderResponse;
use App\Entity\FinalAcceptOrderRequestResponse;
use App\Entity\OrderRejectRFCRequest;
use App\Entity\OrderRejectRFCRequestResponse;
use App\Entity\OrderRequestResponse;
use App\Entity\OrderRFCResponse;
use App\Entity\OrderVersionResponse;
use App\Entity\RequestResponse;
use App\Service\Converter\CILOrderRequestConverter;
use App\Service\Converter\FinalAcceptOrderRequestsConverter;
use App\Service\Converter\GetContractVersionRequestConverter;
use App\Service\Converter\OrderRejectRFCRequestConverter;
use App\Service\Converter\OrderRequestConverter;
use Illuminate\Support\Facades\Log;
use stdClass;

class NomineeService
{
    private FinalAcceptOrderRequestsConverter $finalAcceptOrderRequestsConverter;
    private GetContractVersionRequestConverter $getContractVersionRequestConverter;
    private OrderRejectRFCRequestConverter $orderRejectRFCRequestConverter;
    private OrderRequestConverter $orderRequestConverter;
    private CILOrderRequestConverter $CILOrderRequestConverter;

    public function __construct(
        FinalAcceptOrderRequestsConverter  $finalAcceptOrderRequestsConverter,
        GetContractVersionRequestConverter $getContractVersionRequestConverter,
        OrderRejectRFCRequestConverter     $orderRejectRFCRequestConverter,
        OrderRequestConverter              $orderRequestConverter,
        CILOrderRequestConverter           $CILOrderRequestConverter
    )
    {
        $this->finalAcceptOrderRequestsConverter = $finalAcceptOrderRequestsConverter;
        $this->getContractVersionRequestConverter = $getContractVersionRequestConverter;
        $this->orderRejectRFCRequestConverter = $orderRejectRFCRequestConverter;
        $this->orderRequestConverter = $orderRequestConverter;
        $this->CILOrderRequestConverter = $CILOrderRequestConverter;
    }

    public function OrderRequests($request): RequestResponse
    {
        Log::info('Order Requests JSON ===> ' . json_encode($request));
        Log::info('Order Requests', json_decode(json_encode($request), true));

        $orderRequest = $this->orderRequestConverter->convert($request->Request);

        $orderVersionResponses = [];
        if (count($orderRequest->getOrderRequests()) > 0) {
            foreach ($orderRequest->getOrderRequests() as $orderRequestItem) {
                $orderVersionResponse = new OrderVersionResponse();
                $orderVersionResponse->setRequestID($orderRequest->getRequestID());
                $orderVersionResponse->setOrderID($orderRequestItem->getOrderID());
                $orderVersionResponse->setVersion($orderRequestItem->getVersion());
                $orderVersionResponse->setStatus(true);
                $orderVersionResponse->setErrorMessage('');
                $orderVersionResponse->setErrorCode(0);

                $orderVersionResponses[] = $orderVersionResponse;
            }
        }

        $orderRequestResponse = new OrderRequestResponse();
        $orderRequestResponse->setRequestID($orderRequest->getRequestID());
        $orderRequestResponse->setOrderVersionResponse($orderVersionResponses);
        Log::info('Order Response' . $orderRequestResponse);

        return (new RequestResponse())->setReturn($orderRequestResponse);
    }

    public function OrderRequest($request): RequestResponse
    {
        Log::info('Request ===> ' . json_encode($request));
        Log::info('Order Request', json_decode(json_encode($request), true));

        $orderRequest = $this->orderRequestConverter->convert($request->Request);

        $orderVersionResponses = [];
        if (count($orderRequest->getOrderRequests()) > 0) {
            foreach ($orderRequest->getOrderRequests() as $orderRequestItem) {
                $orderVersionResponse = new OrderVersionResponse();
                $orderVersionResponse->setRequestID($orderRequest->getRequestID());
                $orderVersionResponse->setOrderID($orderRequestItem->getOrderID());
                $orderVersionResponse->setVersion($orderRequestItem->getVersion());
                $orderVersionResponse->setStatus(true);
                $orderVersionResponse->setErrorMessage('');
                $orderVersionResponse->setErrorCode(0);

                $orderVersionResponses[] = $orderVersionResponse;
            }
        }

        $orderRequestResponse = new OrderRequestResponse();
        $orderRequestResponse->setRequestID($orderRequest->getRequestID());
        $orderRequestResponse->setOrderVersionResponse($orderVersionResponses);
        Log::info('Order Response' . $orderRequestResponse);

        return (new RequestResponse())->setReturn($orderRequestResponse);
    }

    public function CILorderRequest($request): RequestResponse
    {
        Log::info('CIL Order Request', json_decode(json_encode($request), true));

//        $CILorderRequest = $this->CILOrderRequestConverter->convert($request->Request ?? $request);

        $cilResponse = new CILOrderResponse();
        $cilResponse->setStatus(true);
        $cilResponse->setErrorMessage('');
        $cilResponse->setRequestID('');

//        Log::info('CIL Order Response' . $cilResponse);

        return (new RequestResponse())->setReturn($cilResponse);
    }

    public function OrderRejectRFCRequest($request)
    {
        Log::info('Request ===> ' . json_encode($request));
        Log::info('Order Reject RFC Request', json_decode(json_encode($request), true));

        /** @var array|OrderRejectRFCRequest[] $orderRejectRFCRequests */
        $orderRejectRFCRequests = $this->orderRejectRFCRequestConverter->convert($request->Request);

        $orderRFCResponses = [];
        foreach ($orderRejectRFCRequests as $orderRejectRFCRequest) {
            $orderRFCResponse = new OrderRFCResponse();
            $orderRFCResponse->setRFCID($orderRejectRFCRequest->getRFCID());
            $orderRFCResponse->setStatus(true);
            $orderRFCResponse->setErrorCode(0);
            $orderRFCResponse->setErrorMessage('');
            $orderRFCResponses[] = $orderRFCResponse;
        }

        $oderRejectRFCRequestResponse = new OrderRejectRFCRequestResponse();
        $oderRejectRFCRequestResponse->setRequestID($request->Request->RequestID ?? '');
        $oderRejectRFCRequestResponse->setOrderRFCResponse($orderRFCResponses);

        return (new RequestResponse())->setReturn($oderRejectRFCRequestResponse);
    }

    public function FinalAcceptOrderRequest($request): RequestResponse
    {
        Log::info('Request ===> ' . json_encode($request));
        Log::info('Final Accept Order Request', json_decode(json_encode($request), true));

        $finalAcceptOrderRequests = $this->finalAcceptOrderRequestsConverter->convert($request->Request);

        $orderVersionResponse = [];

        foreach ($finalAcceptOrderRequests->getFinalAcceptOrderRequest() as $orderRequest) {
            $orderVersion = new OrderVersionResponse();
            $orderVersion->RequestID = $finalAcceptOrderRequests->getRequestID();
            $orderVersion->setOrderID($orderRequest->getOrderID());
            $orderVersion->setErrorCode(0);
            $orderVersion->setErrorMessage('');
            $orderVersion->setStatus(true);
            $orderVersion->setVersion($orderRequest->getVersion());
            $orderVersion->save();

            $orderVersionResponse[] = $orderVersion;
        }

        $response = new FinalAcceptOrderRequestResponse();
        $response->setRequestID($finalAcceptOrderRequests->getRequestID());
        $response->setOrderVersionResponse($orderVersionResponse);
        $response->save();

        return (new RequestResponse())->setReturn($response);
    }

    public function GetContractVersionRequest($request): RequestResponse
    {
        Log::info('Request ===> ' . json_encode($request));
        Log::info('Get Contract Version Request', json_decode(json_encode($request), true));

        $getContractVersionRequest = $this->getContractVersionRequestConverter->convert($request);

        $response = $this->prepareResponse($getContractVersionRequest->getRequestID());
        $response->ContractVersion = '1';

        return (new RequestResponse())->setReturn($response);
    }

    public function prepareResponse(?string $requestId): stdClass
    {
        $stdResponse = new stdClass();
        $stdResponse->Status = true;
        $stdResponse->ErrorCode = 0;
        $stdResponse->ErrorMessage = '';

        if ($requestId) {
            $stdResponse->RequestID = $requestId;
        }

        return $stdResponse;
    }
}

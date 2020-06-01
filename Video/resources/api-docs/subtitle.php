<?php

/**
 * @OA\Get(
 *     path="/video/{id}/subtitle",
 *     tags={"subtitle"},
 *     summary="Get subtitle with id",
 *     description="Get all src",
 *      @OA\Parameter(
 *          name="id",
 *          description="video Id",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string",
 *              example="b9fc0161-cdcc-4ecb-9b6d-91a929fcab3c"
 *          )
 *     ),
 *     @OA\Response(
 *          response=200,
 *          description="Successfull Operation",
 *          @OA\JsonContent()
 *     ),
 *     @OA\Response(
 *          response=400,
 *          description="Bad Request",
 *     ),
 *     @OA\Response(
 *          response=401,
 *          description="Unauthenticated"
 *     ),
 *     @OA\Response(
 *          response=404,
 *          description="Resource not Found"
 *     ),
 *     @OA\Response(
 *          response=500,
 *          description="Internal Server Error"
 *     ),
 *     security={{"passport":{}}}
 * )
 */

 /**
 * @OA\Put(
 *     path="/video/{id}/subtitle/{subid}",
 *     tags={"subtitle"},
 *     summary="src update",
 *     description="Update a src",
 *     @OA\Parameter(
 *          name="id",
 *          description="video id",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string",
 *              example="3fdfd9a2-1a28-4fdb-a591-0e18af6feb9e"
 *          )
 *     ),
 *     @OA\Parameter(
 *          name="subid",
 *          description="subtitle id",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string",
 *              example="3fdfd9a2-1a28-4fdb-a591-0e18af6feb9e"
 *          )
 *     ),
 *     @OA\RequestBody(
 *        @OA\JsonContent(
 *           example={
 *                   "Description": null,
 *                   }
 *        )
 *     ),
 *     @OA\Response(
 *          response=201,
 *          description="Successful operation",
 *          @OA\JsonContent()
 *      ),
 *     @OA\Response(
 *          response=401,
 *          description="Unauthenticated"
 *      ),
 *     @OA\Response(
 *          response=422,
 *          description="Invalid data"
 *      ),
 *     @OA\Response(
 *          response=500,
 *          description="Internal Server Error"
 *      ),
 *     security={{"passport":{}}}
 * )
 */
<?php

/**
 * @OA\Get(
 *     path="/video/{videoid}/subtitle?type=sub",
 *     tags={"Subtitles"},
 *     summary="Get subtitle with id",
 *     description="Get subtitle for given video",
 *      @OA\Parameter(
 *          name="videoid",
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
 *     path="/video/{videoid}/subtitle/{subtitleId}",
 *     tags={"Subtitles"},
 *     summary="Modify Subtitle",
 *     description="Modify Subtitle",
 *     @OA\Parameter(
 *          name="videoid",
 *          description="video id",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string",
 *              example="3fdfd9a2-1a28-4fdb-a591-0e18af6feb9e"
 *          )
 *     ),
 *     @OA\Parameter(
 *          name="subtitleId",
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
 *                 "timeFromInSeconds": "10",
 *                 "timeToInSeconds": "40",
 *                 "text": "This is the updated subtitle text",
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
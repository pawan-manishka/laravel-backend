<?php

/**
 * @OA\Post(
 *     path="/video",
 *     tags={"Video Upload"},
 *     summary="Uploading Video for the system",
 *     description="Uploading of video ",
 *  *  @OA\Parameter(
 *          name="title",
 *          description="Video title",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string",
 *              example="Cenderela"
 *          )
 *      ),
 *  *  @OA\Parameter(
 *          name="description",
 *          description="Video description",
 *          required=false,
 *          in="query",
 *          @OA\Schema(
 *              type="string",
 *              example="kids movie"
 *          )
 *      ),
 *     @OA\RequestBody(
 *        @OA\JsonContent(
 *           example={
 *                   "title": "8c3b36c0-44be-4a35-83ff-236140b06b7f",
 *                    "description": "cendarela",
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
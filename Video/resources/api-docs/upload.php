<?php

/**
 * @OA\Post(
 *     path="/video-upload",
 *     tags={"Video Upload"},
 *     summary="Uploading Video for the system",
 *     description="Uploading of video ",
 *  @OA\Parameter(
 *          name="video_id",
 *          description="Video ID",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string",
 *              example="2719cde8-7019-4ca8-81f5-1b6057037307"
 *          )
 *      ),
 *  *  @OA\Parameter(
 *          name="video_name",
 *          description="Video Name",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string",
 *              example="Cenderela"
 *          )
 *      ),
 *  *  @OA\Parameter(
 *          name="video_path",
 *          description="Video Path",
 *          required=false,
 *          in="query",
 *          @OA\Schema(
 *              type="string",
 *              example="http://www.aws.videopath1243"
 *          )
 *      ),
 *     @OA\RequestBody(
 *        @OA\JsonContent(
 *           example={
 *                   "video_id": "8c3b36c0-44be-4a35-83ff-236140b06b7f",
 *                    "video_name": "cendarela",
 *                    "video_path": "http://www.aws.videopath1243",
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
<?php

/**
 * @OA\Get(
 *      path="/birthdays",
 *      tags={"Employments"},
 *      summary="Get birthdays of employmnets",
 *      description="Returns upcoming birthdays of employments",
 *      @OA\Parameter(
 *          name="company",
 *          description="Company ID",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string",
 *              example="2719cde8-7019-4ca8-81f5-1b6057037307"
 *          )
 *      ),
 *     @OA\Parameter(
 *          name="within",
 *          description="Comma seperated date range",
 *          required=false,
 *          in="query",
 *          @OA\Schema(
 *              type="string",
 *              example="2018-01-01,2018-12-31"
 *          )
 *     ),
 *      @OA\Response(
 *          response=200,
 *          description="Successull Operation",
 *          @OA\JsonContent()
 *       ),
 *      @OA\Response(
 *          response=400,
 *          description="Bad request"
 *      ),
 *      @OA\Response(
 *          response=404,
 *          description="Resource Not Found"
 *      ),
 *     @OA\Response(
 *          response=500,
 *          description="Internal Server Error"
 *      ),
 *      security={{"passport": {}}}),
 * )
 */

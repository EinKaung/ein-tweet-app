<?php

namespace Tests\Unit\Services;

use Mockery;

use PHPUnit\Framework\TestCase;
use App\Services\TweetService;

class TweetServiceTest extends TestCase
{
    /**
     * A basic unit test example.
     */

     /**
      * @runInSeparateProcess
      * @return void
      */
    public function test_check_own_tweet(): void
    {
        $tweetService = new TweetService(); // TweetServiceのインスタンス作成

        $mock = Mockery::mock('alias:App\Models\Tweet');
        $mock->shouldReceive('where->first')->andReturn((object)[
            'id' => 1,
            'user_id' => 1
        ]);

        $result = $tweetService->checkOwnTweet(1, 1);
        $this->assertTrue($result);

        $result = $tweetService->checkOwnTweet(2, 1);
        $this->assertFalse($result);
    }
}

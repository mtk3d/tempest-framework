<?php

declare(strict_types=1);

namespace Tests\Tempest\Fixtures\Modules\Posts;

use Tempest\Http\Post;
use Tempest\Http\Response;
use Tempest\Http\Responses\Ok;

final readonly class PostController
{
    #[Post('/create-post')]
    public function store(PostRequest $request): Response
    {
        return new Ok("{$request->title} {$request->text}");
    }
}

<?php

use Barryvanveen\Blogs\BlogRepository;

class AdminBlogController extends BaseController
{
    /** @var BlogRepository */
    private $blogRepository;

    public function __construct(BlogRepository $blogRepository)
    {
        $this->blogRepository = $blogRepository;
    }

    public function index()
    {
        Head::title('Blog');

        $blogs = $this->blogRepository->all();

        return View::make('blog.admin.index', compact('blogs'));
    }

    public function edit($id)
    {
        Head::title('Blog');

        $blog = $this->blogRepository->findAnyById($id);

        return View::make('blog.admin.edit', compact('blog'));
    }

    public function update($slug)
    {
        dd($slug);
    }
}

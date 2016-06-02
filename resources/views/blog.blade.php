@extends('templates.app')

@section('content')

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <h1 class="page-header">
                Top 4 Posts
                <small>Seleção dos melhores</small>
            </h1>

            <!-- First Blog Post -->
            @foreach($posts as $post)

                <h2>
                    <a href="#">{{ $post['title'] }}</a>
                </h2>
                <p class="lead">
                    by <a href="#">{{ $post['author'] }}</a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Postado em {{ $post['date'] }}</p>
                <hr>
                <img class="img-responsive" src="{{ $post['image'] }}" alt="">
                <hr>
                <p>{{ $post['content'] }}</p>
                <a class="btn btn-primary" href="#">Leia Mais #sqn <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>

            @endforeach

            <!-- Pager -->
            <ul class="pager">
                <li class="previous">
                    <a href="#">&larr; Antigo</a>
                </li>
                <li class="next">
                    <a href="#">Novo &rarr;</a>
                </li>
            </ul>

        </div>

        <!-- Blog Sidebar Widgets Column -->
        <div class="col-md-4">

            <!-- Blog Search Well -->
            <div class="well">
                <h4>Busca</h4>
                <div class="input-group">
                    <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                </div>
                <!-- /.input-group -->
            </div>

            <!-- Blog Categories Well -->
            <div class="well">
                <h4>Categorias</h4>
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="#">Top 4</a>
                            </li>
                            <li><a href="#">Top 10</a>
                            </li>
                            <li><a href="#">Universo</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /.row -->
            </div>

            <!-- Side Widget Well -->
            <div class="well">
                <h4>Sobre o Bloggy</h4>
                <p>Projeto criado para a aula de Laravel Essentials da Code.Education ministradao por Wesley Willians</p>
            </div>

        </div>

    </div>

@endsection
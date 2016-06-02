<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BlogController extends Controller
{
    
    public function index()
    {

        $posts = [
            [
                'title' => 'O Universo Consirador',
                'author' => 'Roberto Ken',
                'date' => '30 de Agosto de 2016',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent fringilla tortor et magna euismod rutrum. Morbi consequat lorem vitae purus congue ultrices sit amet et lorem. Duis vestibulum venenatis enim at hendrerit. Cras hendrerit porta diam, non tempus tellus accumsan non. Proin mattis libero purus, efficitur blandit sapien pellentesque eget. Nullam a imperdiet metus. Praesent ultricies fringilla libero nec tincidunt. Nulla molestie odio quis erat maximus lacinia. Quisque quis sem ultricies, mollis metus a, varius nunc. Nunc at odio aliquam, tempor augue quis, iaculis magna. Sed sed efficitur arcu, eget condimentum mi. Morbi efficitur rhoncus urna, ut posuere velit fermentum nec. Curabitur purus arcu, volutpat sed ligula sit amet, finibus egestas massa. Aliquam interdum fermentum laoreet. Sed vitae dapibus eros.',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/5/50/Evolucion_Universo_CMB_Timeline300_no_WMAP.jpg'
            ],
            [
                'title' => 'As Nozes e Eu',
                'author' => 'José Esquilo',
                'date' => '15 de Junho de 2016',
                'content' => 'Etiam venenatis et metus eget eleifend. Cras vestibulum rutrum tortor. Donec ut ante elit. Sed nunc diam, pharetra sit amet mattis eu, viverra nec urna. Cras a ipsum a orci tempor vestibulum id sed mauris. Phasellus gravida ipsum eget posuere tempus. Suspendisse potenti. Quisque quis tempus ante. Maecenas tempus nisl condimentum nunc congue luctus. Quisque eu leo vel sem fermentum viverra. Nunc tincidunt sagittis ornare. Integer aliquam tincidunt erat eu dictum.',
                'image' => 'https://pixabay.com/static/uploads/photo/2014/04/05/11/40/peanuts-316608_960_720.jpg'
            ],
            [
                'title' => 'Ops..',
                'author' => 'Maria Spears',
                'date' => '01 de Março de 2016',
                'content' => 'Mauris vestibulum auctor magna sit amet vestibulum. Nam sem risus, pretium in eros eu, vestibulum laoreet nulla. Vivamus nulla risus, ullamcorper nec dolor ullamcorper, gravida pharetra mauris. Cras hendrerit bibendum nulla, a feugiat tortor iaculis quis. Aenean quis nisi sit amet augue venenatis ornare. Integer sit amet sagittis lacus. Proin eget mollis odio, quis varius diam. Integer a metus ac urna fermentum lacinia. Maecenas in pharetra lacus, a congue nibh. Nam sit amet cursus nulla, in vehicula ex. Pellentesque et quam vel neque pellentesque condimentum at ac mi. Pellentesque lacinia mi nisi, suscipit maximus lorem rhoncus sit amet. Vivamus et imperdiet urna. Aliquam erat volutpat. Nam scelerisque nibh vitae ex elementum rhoncus.',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/a/ab/BSOD_Windows_8.png'
            ],
            [
                'title' => 'Chega por Hoje',
                'author' => 'Justino Allegro',
                'date' => '05 de Fevereiro de 2016',
                'content' => 'Phasellus tempor eu metus a blandit. Integer ac mauris pulvinar, tincidunt velit vel, venenatis ipsum. Ut nisl felis, molestie eu blandit ullamcorper, sagittis non velit. Donec pretium nisl eros, ac mattis urna porta ut. Aliquam sapien elit, accumsan sit amet lacinia in, tempus nec sem. Vivamus blandit dolor ac sagittis mattis. Integer id varius quam, nec aliquam mauris. Nam venenatis euismod odio, in congue est. Praesent a turpis vel purus pulvinar luctus. Nullam augue tortor, tempus ac dolor nec, pellentesque tincidunt ipsum.',
                'image' => 'https://i.ytimg.com/vi/K4IS0ZBxfE0/hqdefault.jpg'
            ]
        ];

        return view('blog', ['posts' => $posts]);
    }
    
}

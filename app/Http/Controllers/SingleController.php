<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleController extends Controller
{
    public function __invoke() {
        return <<<EOF
        <html>
        <head>
        <title>Hello</title>
        <style>
        body { font-size: 16pt; color: #999; }
        h1 { font-size:100pt; text-align:right; color:#eee; margin: -40px 0px -50px 0px; }
        </style>
        </head>
        <body>
            <h1>Single Action</h1>
            <p>This is an action from single action controller.</p>
        </body>
        </html>
        EOF;
    }
    
}

@extends('layout.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-9">
            <style>
                .bd-content>h1:not(:first-child),
                .bd-content>h2:not(:first-child),
                .bd-content>h3:not(:first-child) {
                    margin-top: 1rem
                }
                
                .bd-example {
                    position: relative;
                    padding: 1rem;
                    margin: 1rem -1rem;
                    border: solid #f7f7f9;
                    border-width: .2rem 0 0
                }
                
                .bd-example::after {
                    display: block;
                    content: "";
                    clear: both
                }
                
                @media (min-width:576px) {
                
                .bd-example {
                    padding: 1.5rem;
                    margin-right: 0;
                    margin-bottom: 0;
                    margin-left: 0;
                    border-width: .2rem
                }
                }
                
                .bd-example+p {
                    margin-top: 2rem
                }
                
                .bd-example .pos-f-t {
                    position: relative;
                    margin: -1rem
                }
                
                @media (min-width:576px) {
                
                .bd-example .pos-f-t {
                    margin: -1.5rem
                }
                }
                
                .bd-example>.form-control+.form-control {
                    margin-top: .5rem
                }
                
                .bd-example>.alert+.alert,
                .bd-example>.nav+.nav,
                .bd-example>.navbar+.navbar,
                .bd-example>.progress+.btn,
                .bd-example>.progress+.progress {
                    margin-top: 1rem
                }
                
                .bd-example>.dropdown-menu:first-child {
                    position: static;
                    display: block
                }
                
                .bd-example>.form-group:last-child {
                    margin-bottom: 0
                }
                
                .bd-example>.close {
                    float: none
                }
                
                .bd-example-type .table .type-info {
                    color: #999;
                    vertical-align: middle
                }
                
                .bd-example-type .table td {
                    padding: 1rem 0;
                    border-color: #eee
                }
                
                .bd-example-type .table tr:first-child td {
                    border-top: 0
                }
                
                .bd-example-type h1,
                .bd-example-type h2,
                .bd-example-type h3,
                .bd-example-type h4,
                .bd-example-type h5,
                .bd-example-type h6 {
                    margin: 0
                }
                
                .bd-example-bg-classes p {
                    padding: 1rem
                }
                
                .bd-example>img+img {
                    margin-left: .5rem
                }
                
                .bd-example>.btn-group {
                    margin-top: .25rem;
                    margin-bottom: .25rem
                }
                
                .bd-example>.btn-toolbar+.btn-toolbar {
                    margin-top: .5rem
                }
                
                .bd-example-control-sizing input[type=text]+input[type=text],
                .bd-example-control-sizing select {
                    margin-top: .5rem
                }
                
                .bd-example-form .input-group {
                    margin-bottom: .5rem
                }
                
                .bd-example>textarea.form-control {
                    resize: vertical
                }
                
                .bd-example>.list-group {
                    max-width: 400px
                }
                
                .bd-example .fixed-top,
                .bd-example .sticky-top {
                    position: static;
                    margin: -1rem -1rem 1rem
                }
                
                .bd-example .fixed-bottom {
                    position: static;
                    margin: 1rem -1rem -1rem
                }
                
                @media (min-width:576px) {
                
                .bd-example .fixed-top,
                .bd-example .sticky-top {
                    margin: -1.5rem -1.5rem 1rem
                }
                
                .bd-example .fixed-bottom {
                    margin: 1rem -1.5rem -1.5rem
                }
                }
                
                .bd-example .pagination {
                    margin-top: .5rem;
                    margin-bottom: .5rem
                }
                
                .bd-example-modal {
                    background-color: #fafafa
                }
                
                .bd-example-modal .modal {
                    position: relative;
                    top: auto;
                    right: auto;
                    bottom: auto;
                    left: auto;
                    z-index: 1;
                    display: block
                }
                
                .bd-example-modal .modal-dialog {
                    left: auto;
                    margin-right: auto;
                    margin-left: auto
                }
                
                .bd-example-tabs .nav-tabs {
                    margin-bottom: 1rem
                }
                
                .bd-example-tooltips {
                    text-align: center
                }
                
                .bd-example-tooltips>.btn {
                    margin-top: .25rem;
                    margin-bottom: .25rem
                }
                
                .bd-example-popover-static {
                    padding-bottom: 1.5rem;
                    background-color: #f9f9f9
                }
                
                .bd-example-popover-static .popover {
                    position: relative;
                    display: block;
                    float: left;
                    width: 260px;
                    margin: 1.25rem
                }
                
                .bd-example-tooltip-static .tooltip {
                    position: relative;
                    display: inline-block;
                    margin: 10px 20px;
                    opacity: 1
                }
                
                .scrollspy-example {
                    position: relative;
                    height: 200px;
                    margin-top: .5rem;
                    overflow: auto
                }
                
                .bd-example>.bg-danger:not(.navbar),
                .bd-example>.bg-faded:not(.navbar),
                .bd-example>.bg-info:not(.navbar),
                .bd-example>.bg-inverse:not(.navbar),
                .bd-example>.bg-primary:not(.navbar),
                .bd-example>.bg-success:not(.navbar),
                .bd-example>.bg-warning:not(.navbar) {
                    padding: .5rem;
                    margin-top: .5rem;
                    margin-bottom: .5rem
                }
                
                .bd-example-border-utils [class^=border-] {
                    display: inline-block;
                    width: 6rem;
                    height: 6rem;
                    margin: .25rem;
                    background-color: #f5f5f5;
                    border: 1px solid
                }
                
                .bd-example .carousel-inner img {
                    width: 100%;
                    height: 400px;
                }
                </style>
                
                    <h1 class="display-4">Layout</h1>
                    <h1 class="bd-title" id="content">Media object</h1>
                    <h2 id="nesting">Nesting</h2>
                    <div class="bd-example" data-example-id="">
                        <div class="media"> <img class="d-flex mr-3" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2264%22%20height%3D%2264%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2064%2064%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15a877f45a2%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15a877f45a2%22%3E%3Crect%20width%3D%2264%22%20height%3D%2264%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2213%22%20y%3D%2236.8%22%3E64x64%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                            <div class="media-body">
                                <h5 class="mt-0">Media heading</h5>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                <div class="media mt-3"> <a class="d-flex pr-3" href="#"> <img data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2264%22%20height%3D%2264%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2064%2064%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15a877f45a5%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15a877f45a5%22%3E%3Crect%20width%3D%2264%22%20height%3D%2264%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2213%22%20y%3D%2236.8%22%3E64x64%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true"> </a>
                                    <div class="media-body">
                                        <h5 class="mt-0">Media heading</h5>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h2 id="alignment">Alignment</h2>
                    <div class="bd-example" data-example-id="">
                        <div class="media"> <img class="d-flex align-self-start mr-3" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2264%22%20height%3D%2264%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2064%2064%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15a877f45a8%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15a877f45a8%22%3E%3Crect%20width%3D%2264%22%20height%3D%2264%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2213%22%20y%3D%2236.8%22%3E64x64%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                            <div class="media-body">
                                <h5 class="mt-0">Top-aligned media</h5>
                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                <p>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bd-example" data-example-id="">
                        <div class="media"> <img class="d-flex align-self-center mr-3" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2264%22%20height%3D%2264%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2064%2064%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15a877f45aa%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15a877f45aa%22%3E%3Crect%20width%3D%2264%22%20height%3D%2264%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2213%22%20y%3D%2236.8%22%3E64x64%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                            <div class="media-body">
                                <h5 class="mt-0">Center-aligned media</h5>
                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                <p class="mb-0">Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bd-example" data-example-id="">
                        <div class="media"> <img class="d-flex align-self-end mr-3" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2264%22%20height%3D%2264%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2064%2064%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15a877f45ac%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15a877f45ac%22%3E%3Crect%20width%3D%2264%22%20height%3D%2264%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2213%22%20y%3D%2236.8%22%3E64x64%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                            <div class="media-body">
                                <h5 class="mt-0">Bottom-aligned media</h5>
                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                <p class="mb-0">Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                            </div>
                        </div>
                    </div>
                    <h2 id="order">Order</h2>
                    <div class="bd-example" data-example-id="">
                        <div class="media">
                            <div class="media-body">
                                <h5 class="mt-0 mb-1">Media object</h5>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. </div>
                            <img class="d-flex ml-3" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2264%22%20height%3D%2264%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2064%2064%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15a877f45ae%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15a877f45ae%22%3E%3Crect%20width%3D%2264%22%20height%3D%2264%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2213%22%20y%3D%2236.8%22%3E64x64%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true"> </div>
                    </div>
                    <h2 id="media-list">Media list</h2>
                    <div class="bd-example" data-example-id="">
                        <ul class="list-unstyled">
                            <li class="media"> <img class="d-flex mr-3" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2264%22%20height%3D%2264%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2064%2064%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15a877f45b0%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15a877f45b0%22%3E%3Crect%20width%3D%2264%22%20height%3D%2264%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2213%22%20y%3D%2236.8%22%3E64x64%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                                <div class="media-body">
                                    <h5 class="mt-0 mb-1">List-based media object</h5>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. </div>
                            </li>
                            <li class="media my-4"> <img class="d-flex mr-3" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2264%22%20height%3D%2264%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2064%2064%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15a877f45b2%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15a877f45b2%22%3E%3Crect%20width%3D%2264%22%20height%3D%2264%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2213%22%20y%3D%2236.8%22%3E64x64%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                                <div class="media-body">
                                    <h5 class="mt-0 mb-1">List-based media object</h5>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. </div>
                            </li>
                            <li class="media"> <img class="d-flex mr-3" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2264%22%20height%3D%2264%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2064%2064%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15a877f45b5%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15a877f45b5%22%3E%3Crect%20width%3D%2264%22%20height%3D%2264%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2213%22%20y%3D%2236.8%22%3E64x64%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                                <div class="media-body">
                                    <h5 class="mt-0 mb-1">List-based media object</h5>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. </div>
                            </li>
                        </ul>
                    </div>
                    <h1 class="display-4">Content</h1>
                    <h1 class="bd-title" id="content">Reboot</h1>
                    <h2 id="headings-and-paragraphs">Headings and paragraphs</h2>
                    <div class="bd-example">
                        <h1 id="h1-heading">h1 heading</h1>
                        <p>Curabitur blandit tempus porttitor. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                        <h2 id="h2-heading">h2 heading</h2>
                        <p>Curabitur blandit tempus porttitor. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                        <h3 id="h3-heading">h3 heading</h3>
                        <p>Curabitur blandit tempus porttitor. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                        <h4 id="h4-heading">h4 heading</h4>
                        <p>Curabitur blandit tempus porttitor. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                        <h5 id="h5-heading">h5 heading</h5>
                        <p>Curabitur blandit tempus porttitor. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                        <h6 id="h6-heading">h6 heading</h6>
                        <p>Curabitur blandit tempus porttitor. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                    </div>
                    <h2 id="lists">Lists</h2>
                    <div class="bd-example">
                        <ul>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Consectetur adipiscing elit</li>
                            <li>Integer molestie lorem at massa</li>
                            <li>Facilisis in pretium nisl aliquet</li>
                            <li>Nulla volutpat aliquam velit
                                <ul>
                                    <li>Phasellus iaculis neque</li>
                                    <li>Purus sodales ultricies</li>
                                    <li>Vestibulum laoreet porttitor sem</li>
                                    <li>Ac tristique libero volutpat at</li>
                                </ul>
                            </li>
                            <li>Faucibus porta lacus fringilla vel</li>
                            <li>Aenean sit amet erat nunc</li>
                            <li>Eget porttitor lorem</li>
                        </ul>
                        <ol>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Consectetur adipiscing elit</li>
                            <li>Integer molestie lorem at massa</li>
                            <li>Facilisis in pretium nisl aliquet</li>
                            <li>Nulla volutpat aliquam velit</li>
                            <li>Faucibus porta lacus fringilla vel</li>
                            <li>Aenean sit amet erat nunc</li>
                            <li>Eget porttitor lorem</li>
                        </ol>
                    </div>
                    <div class="bd-example">
                        <dl>
                            <dt>Description lists</dt>
                            <dd>A description list is perfect for defining terms.</dd>
                            <dt>Euismod</dt>
                            <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem.</dd>
                            <dd>Donec id elit non mi porta gravida at eget metus.</dd>
                            <dt>Malesuada porta</dt>
                            <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                        </dl>
                    </div>
                    <h2 id="preformatted-text">Preformatted text</h2>
                    <div class="bd-example">
<pre>
.example-element {
    margin-bottom: 1rem;
}
</pre>
                    </div>
                    <h2 id="tables">Tables</h2>
                    <div class="bd-example">
                        <table>
                            <caption>
                            This is an example table, and this is its caption to describe the contents.
                            </caption>
                            <thead>
                                <tr>
                                    <th>Table heading</th>
                                    <th>Table heading</th>
                                    <th>Table heading</th>
                                    <th>Table heading</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                </tr>
                                <tr>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                </tr>
                                <tr>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <h2 id="forms">Forms</h2>
                    <form class="bd-example">
                        <fieldset>
                            <legend>Example legend</legend>
                            <p>
                                <label for="input">Example input</label>
                                <input class="form-control" id="input" placeholder="Example input" type="text">
                            </p>
                            <p>
                                <label for="select">Example select</label>
                                <select class="form-control" id="select">
                                    <option value="">Choose...</option>
                                    <optgroup label="Option group 1">
                                    <option value="">Option 1</option>
                                    <option value="">Option 2</option>
                                    <option value="">Option 3</option>
                                    </optgroup>
                                    <optgroup label="Option group 2">
                                    <option value="">Option 4</option>
                                    <option value="">Option 5</option>
                                    <option value="">Option 6</option>
                                    </optgroup>
                                </select>
                            </p>
                            <p>
                                <label>
                                    <input class="form-control" value="" type="checkbox">
                                    Check this checkbox </label>
                            </p>
                            <p>
                                <label>
                                    <input class="form-control" name="optionsRadios" id="optionsRadios1" value="option1" checked="" type="radio">
                                    Option one is this and that </label>
                                <label>
                                    <input class="form-control" name="optionsRadios" id="optionsRadios2" value="option2" type="radio">
                                    Option two is something else that's also super long to demonstrate the wrapping of these fancy form controls. </label>
                                <label>
                                    <input class="form-control" name="optionsRadios" id="optionsRadios3" value="option3" disabled="" type="radio">
                                    Option three is disabled </label>
                            </p>
                            <p>
                                <label for="textarea">Example textarea</label>
                                <textarea class="form-control" id="textarea" rows="3"></textarea>
                            </p>
                            <p>
                                <label for="time">Example temporal</label>
                                <input class="form-control" id="time" type="datetime-local">
                            </p>
                            <p>
                                <label for="output">Example output</label>
                                <output class="form-control" name="result" id="output">100</output>
                            </p>
                            <p>
                                <button class="btn" type="submit">Button submit</button>
                                <input class="form-control" value="Input submit button" type="submit">
                                <input class="form-control" value="Input button" type="button">
                            </p>
                            <p>
                                <button class="btn" type="submit" disabled="">Button submit</button>
                                <input class="form-control" value="Input submit button" disabled="" type="submit">
                                <input class="form-control" value="Input button" disabled="" type="button">
                            </p>
                        </fieldset>
                    </form>
                    <h2 id="misc-elements">Misc elements</h2>
                    <h3 id="address">Address</h3>
                    <div class="bd-example">
                        <address>
                        <strong>Twitter, Inc.</strong><br>
                        1355 Market St, Suite 900<br>
                        San Francisco, CA 94103<br>
                        <abbr title="Phone">P:</abbr> (123) 456-7890
                        </address>
                        <address>
                        <strong>Full Name</strong><br>
                        <a href="mailto:#">first.last@example.com</a>
                        </address>
                    </div>
                    <h3 id="blockquote">Blockquote</h3>
                    <div class="bd-example">
                        <blockquote class="blockquote">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                            <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                        </blockquote>
                    </div>
                    <h3 id="inline-elements">Inline elements</h3>
                    <div class="bd-example"> Nulla <abbr title="attribute">attr</abbr> vitae elit libero, a pharetra augue. </div>
                    <h1 class="bd-title" id="content">Typography</h1>
                    <h2 id="headings">Headings</h2>
                    <div class="bd-example bd-example-type">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td><h1>h1. Bootstrap heading</h1></td>
                                    <td class="type-info">Semibold 2.5rem (40px)</td>
                                </tr>
                                <tr>
                                    <td><h2>h2. Bootstrap heading</h2></td>
                                    <td class="type-info">Semibold 2rem (32px)</td>
                                </tr>
                                <tr>
                                    <td><h3>h3. Bootstrap heading</h3></td>
                                    <td class="type-info">Semibold 1.75rem (28px)</td>
                                </tr>
                                <tr>
                                    <td><h4>h4. Bootstrap heading</h4></td>
                                    <td class="type-info">Semibold 1.5rem (24px)</td>
                                </tr>
                                <tr>
                                    <td><h5>h5. Bootstrap heading</h5></td>
                                    <td class="type-info">Semibold 1.25rem (20px)</td>
                                </tr>
                                <tr>
                                    <td><h6>h6. Bootstrap heading</h6></td>
                                    <td class="type-info">Semibold 1rem (16px)</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <h3 id="customizing-headings">Customizing headings</h3>
                    <div class="bd-example" data-example-id="">
                        <h3> Fancy display heading <small class="text-muted">With faded secondary text</small> </h3>
                    </div>
                    <h2 id="display-headings">Display headings</h2>
                    <div class="bd-example bd-example-type">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td><h1 class="display-1">Display 1</h1></td>
                                </tr>
                                <tr>
                                    <td><h1 class="display-2">Display 2</h1></td>
                                </tr>
                                <tr>
                                    <td><h1 class="display-3">Display 3</h1></td>
                                </tr>
                                <tr>
                                    <td><h1 class="display-4">Display 4</h1></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <h2 id="lead">Lead</h2>
                    <div class="bd-example" data-example-id="">
                        <p class="lead"> Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus. </p>
                    </div>
                    <h2 id="inline-text-elements">Inline text elements</h2>
                    <div class="bd-example" data-example-id="">
                        <p>You can use the mark tag to
                            <mark>highlight</mark>
                            text.</p>
                        <p><del>This line of text is meant to be treated as deleted text.</del></p>
                        <p><s>This line of text is meant to be treated as no longer accurate.</s></p>
                        <p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
                        <p><u>This line of text will render as underlined</u></p>
                        <p><small>This line of text is meant to be treated as fine print.</small></p>
                        <p><strong>This line rendered as bold text.</strong></p>
                        <p><em>This line rendered as italicized text.</em></p>
                    </div>
                    <h2 id="abbreviations">Abbreviations</h2>
                    <div class="bd-example" data-example-id="">
                        <p><abbr title="attribute">attr</abbr></p>
                        <p><abbr title="HyperText Markup Language" class="initialism">HTML</abbr></p>
                    </div>
                    <h2 id="blockquotes">Blockquotes</h2>
                    <h3 id="naming-a-source">Naming a source</h3>
                    <div class="bd-example" data-example-id="">
                        <blockquote class="blockquote">
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                            <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                        </blockquote>
                    </div>
                    <h3 id="reverse-layout">Reverse layout</h3>
                    <div class="bd-example" data-example-id="">
                        <blockquote class="blockquote blockquote-reverse">
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                            <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                        </blockquote>
                    </div>
                    <h2 id="lists">Lists</h2>
                    <h3 id="unstyled">Unstyled</h3>
                    <div class="bd-example" data-example-id="">
                        <ul class="list-unstyled">
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Consectetur adipiscing elit</li>
                            <li>Integer molestie lorem at massa</li>
                            <li>Facilisis in pretium nisl aliquet</li>
                            <li>Nulla volutpat aliquam velit
                                <ul>
                                    <li>Phasellus iaculis neque</li>
                                    <li>Purus sodales ultricies</li>
                                    <li>Vestibulum laoreet porttitor sem</li>
                                    <li>Ac tristique libero volutpat at</li>
                                </ul>
                            </li>
                            <li>Faucibus porta lacus fringilla vel</li>
                            <li>Aenean sit amet erat nunc</li>
                            <li>Eget porttitor lorem</li>
                        </ul>
                    </div>
                    <h3 id="inline">Inline</h3>
                    <div class="bd-example" data-example-id="">
                        <ul class="list-inline">
                            <li class="list-inline-item">Lorem ipsum</li>
                            <li class="list-inline-item">Phasellus iaculis</li>
                            <li class="list-inline-item">Nulla volutpat</li>
                        </ul>
                    </div>
                    <h3 id="description-list-alignment">Description list alignment</h3>
                    <div class="bd-example" data-example-id="">
                        <dl class="row">
                            <dt class="col-sm-3">Description lists</dt>
                            <dd class="col-sm-9">A description list is perfect for defining terms.</dd>
                            <dt class="col-sm-3">Euismod</dt>
                            <dd class="col-sm-9">Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                            <dd class="col-sm-9 offset-sm-3">Donec id elit non mi porta gravida at eget metus.</dd>
                            <dt class="col-sm-3">Malesuada porta</dt>
                            <dd class="col-sm-9">Etiam porta sem malesuada magna mollis euismod.</dd>
                            <dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
                            <dd class="col-sm-9">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
                            <dt class="col-sm-3">Nesting</dt>
                            <dd class="col-sm-9">
                                <dl class="row">
                                    <dt class="col-sm-4">Nested definition list</dt>
                                    <dd class="col-sm-8">Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc.</dd>
                                </dl>
                            </dd>
                        </dl>
                    </div>
                    <h1 class="bd-title" id="content">Code</h1>
                    <h2 id="inline-code">Inline code</h2>
                    <div class="bd-example" data-example-id=""> For example, <code>&lt;section&gt;</code> should be wrapped as inline. </div>
                    <h2 id="code-blocks">Code blocks</h2>
                    <div class="bd-example" data-example-id="">
                        <pre><code>&lt;p&gt;Sample text here...&lt;/p&gt;
                &lt;p&gt;And another line of sample text here...&lt;/p&gt;
                </code></pre>
                    </div>
                    <h2 id="variables">Variables</h2>
                    <div class="bd-example" data-example-id=""> <var>y</var> = <var>m</var><var>x</var> + <var>b</var> </div>
                    <h2 id="user-input">User input</h2>
                    <div class="bd-example" data-example-id=""> To switch directories, type <kbd>cd</kbd> followed by the name of the directory.<br>
                        To edit settings, press <kbd><kbd>ctrl</kbd> + <kbd>,</kbd></kbd> </div>
                    <h2 id="sample-output">Sample output</h2>
                    <div class="bd-example" data-example-id=""> <samp>This text is meant to be treated as sample output from a computer program.</samp> </div>
                    <h1 class="bd-title" id="content">Images</h1>
                    <h2 id="responsive-images">Responsive images</h2>
                    <div class="bd-example"> <img data-src="holder.js/100px250" class="img-fluid" alt="100%x250" style="height: 250px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22771%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20771%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15a878ac7e3%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A39pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15a878ac7e3%22%3E%3Crect%20width%3D%22771%22%20height%3D%22250%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22285.75%22%20y%3D%22143%22%3E771x250%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true"> </div>
                    <h2 id="image-thumbnails">Image thumbnails</h2>
                    <div class="bd-example bd-example-images"> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" style="width: 200px; height: 200px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22200%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20200%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15a878ac7e7%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15a878ac7e7%22%3E%3Crect%20width%3D%22200%22%20height%3D%22200%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2274%22%20y%3D%22104.8%22%3E200x200%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true"> </div>
                    <h2 id="aligning-images">Aligning images</h2>
                    <div class="bd-example bd-example-images clearfix"> <img data-src="holder.js/200x200" class="rounded float-left" alt="200x200" style="width: 200px; height: 200px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22200%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20200%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15a878ac7ea%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15a878ac7ea%22%3E%3Crect%20width%3D%22200%22%20height%3D%22200%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2274%22%20y%3D%22104.8%22%3E200x200%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true"> <img data-src="holder.js/200x200" class="rounded float-right" alt="200x200" style="width: 200px; height: 200px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22200%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20200%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15a878ac7ed%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15a878ac7ed%22%3E%3Crect%20width%3D%22200%22%20height%3D%22200%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2274%22%20y%3D%22104.8%22%3E200x200%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true"> </div>
                    <div class="bd-example bd-example-images"> <img data-src="holder.js/200x200" class="rounded mx-auto d-block" alt="200x200" style="width: 200px; height: 200px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22200%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20200%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15a878ac7ef%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15a878ac7ef%22%3E%3Crect%20width%3D%22200%22%20height%3D%22200%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2274%22%20y%3D%22104.8%22%3E200x200%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true"> </div>
                    <h1 class="bd-title" id="content">Tables</h1>
                    <h2 id="examples">Examples</h2>
                    <div class="bd-example" data-example-id="">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="bd-example" data-example-id="">
                        <table class="table table-inverse">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <h2 id="table-head-options">Table head options</h2>
                    <div class="bd-example" data-example-id="">
                        <table class="table">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table">
                            <thead class="thead-default">
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <h2 id="striped-rows">Striped rows</h2>
                    <div class="bd-example" data-example-id="">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="bd-example" data-example-id="">
                        <table class="table table-striped table-inverse">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <h2 id="bordered-table">Bordered table</h2>
                    <div class="bd-example" data-example-id="">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@TwBootstrap</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="bd-example" data-example-id="">
                        <table class="table table-bordered table-inverse">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@TwBootstrap</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <h2 id="hoverable-rows">Hoverable rows</h2>
                    <div class="bd-example" data-example-id="">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="bd-example" data-example-id="">
                        <table class="table table-hover table-inverse">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <h2 id="small-table">Small table</h2>
                    <div class="bd-example" data-example-id="">
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="bd-example" data-example-id="">
                        <table class="table table-sm table-inverse">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <h2 id="contextual-classes">Contextual classes</h2>
                    <div class="bd-example">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Column heading</th>
                                    <th>Column heading</th>
                                    <th>Column heading</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="table-active">
                                    <th scope="row">1</th>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                                <tr class="table-success">
                                    <th scope="row">3</th>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                                <tr class="table-info">
                                    <th scope="row">5</th>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                                <tr class="table-warning">
                                    <th scope="row">7</th>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                                <tr class="table-danger">
                                    <th scope="row">9</th>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="bd-example">
                        <table class="table table-inverse">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Column heading</th>
                                    <th>Column heading</th>
                                    <th>Column heading</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-primary">
                                    <th scope="row">1</th>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                                <tr class="bg-success">
                                    <th scope="row">3</th>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                                <tr class="bg-info">
                                    <th scope="row">5</th>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                                <tr class="bg-warning">
                                    <th scope="row">7</th>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                                <tr class="bg-danger">
                                    <th scope="row">9</th>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <h2 id="responsive-tables">Responsive tables</h2>
                    <div class="bd-example">
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Table heading</th>
                                    <th>Table heading</th>
                                    <th>Table heading</th>
                                    <th>Table heading</th>
                                    <th>Table heading</th>
                                    <th>Table heading</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table table-bordered table-responsive">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Table heading</th>
                                    <th>Table heading</th>
                                    <th>Table heading</th>
                                    <th>Table heading</th>
                                    <th>Table heading</th>
                                    <th>Table heading</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <h1 class="bd-title" id="content">Figures</h1>
                    <div class="bd-example" data-example-id="">
                        <figure class="figure"> <img data-src="holder.js/400x300" class="figure-img img-fluid rounded" alt="400x300" style="width: 400px; height: 300px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22400%22%20height%3D%22300%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20400%20300%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15a878e3dbc%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A20pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15a878e3dbc%22%3E%3Crect%20width%3D%22400%22%20height%3D%22300%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22148.5083351135254%22%20y%3D%22159.3%22%3E400x300%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                            <figcaption class="figure-caption">A caption for the above image.</figcaption>
                        </figure>
                    </div>
                    <div class="bd-example" data-example-id="">
                        <figure class="figure"> <img data-src="holder.js/400x300" class="figure-img img-fluid rounded" alt="400x300" style="width: 400px; height: 300px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22400%22%20height%3D%22300%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20400%20300%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15a878e3dc1%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A20pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15a878e3dc1%22%3E%3Crect%20width%3D%22400%22%20height%3D%22300%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22148.5083351135254%22%20y%3D%22159.3%22%3E400x300%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                            <figcaption class="figure-caption text-right">A caption for the above image.</figcaption>
                        </figure>
                    </div>
                    <h1 class="display-4">Components</h1>
                    <h1 class="bd-title" id="content">Alerts</h1>
                    <h2 id="examples">Examples</h2>
                    <h3 id="link-color">Link color</h3>
                    <div class="bd-example" data-example-id="">
                        <div class="alert alert-success" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                            <strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message</a>. </div>
                        <div class="alert alert-info" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                            <strong>Heads up!</strong> This <a href="#" class="alert-link">alert needs your attention</a>, but it's not super important. </div>
                        <div class="alert alert-warning" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                            <strong>Warning!</strong> Better check yourself, you're <a href="#" class="alert-link">not looking too good</a>. </div>
                        <div class="alert alert-danger" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                            <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again. </div>
                    </div>
                    <h3 id="additional-content">Additional content</h3>
                    <div class="bd-example" data-example-id="">
                        <div class="alert alert-success" role="alert">
                            <h4 class="alert-heading">Well done!</h4>
                            <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                            <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                        </div>
                    </div>
                    <h1 class="bd-title" id="content">Badges</h1>
                    <h2 id="example">Example</h2>
                    <div class="bd-example" data-example-id="">
                        <h1>Example heading <span class="badge badge-default">New</span></h1>
                        <h2>Example heading <span class="badge badge-default">New</span></h2>
                        <h3>Example heading <span class="badge badge-default">New</span></h3>
                        <h4>Example heading <span class="badge badge-default">New</span></h4>
                        <h5>Example heading <span class="badge badge-default">New</span></h5>
                        <h6>Example heading <span class="badge badge-default">New</span></h6>
                    </div>
                    <h2 id="contextual-variations">Contextual variations</h2>
                    <div class="bd-example" data-example-id=""> <span class="badge badge-default">Default</span> <span class="badge badge-primary">Primary</span> <span class="badge badge-success">Success</span> <span class="badge badge-info">Info</span> <span class="badge badge-warning">Warning</span> <span class="badge badge-danger">Danger</span> </div>
                    <h2 id="pill-badges">Pill badges</h2>
                    <div class="bd-example" data-example-id=""> <span class="badge badge-pill badge-default">Default</span> <span class="badge badge-pill badge-primary">Primary</span> <span class="badge badge-pill badge-success">Success</span> <span class="badge badge-pill badge-info">Info</span> <span class="badge badge-pill badge-warning">Warning</span> <span class="badge badge-pill badge-danger">Danger</span> </div>
                    <h1 class="bd-title" id="content">Breadcrumb</h1>
                    <div class="bd-example" data-example-id="">
                        <nav class="breadcrumb"> <a class="breadcrumb-item" href="#">Home</a> <a class="breadcrumb-item" href="#">Library</a> <a class="breadcrumb-item" href="#">Data</a> <span class="breadcrumb-item active">Bootstrap</span> </nav>
                    </div>
                    <h1 class="bd-title" id="content">Buttons</h1>
                    <h2 id="examples">Examples</h2>
                    <div class="bd-example" data-example-id="">
                        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                        <button type="button" class="btn btn-primary">Primary</button>
                
                        <!-- Secondary, outline button -->
                        <button type="button" class="btn btn-secondary">Secondary</button>
                
                        <!-- Indicates a successful or positive action -->
                        <button type="button" class="btn btn-success">Success</button>
                
                        <!-- Contextual button for informational alert messages -->
                        <button type="button" class="btn btn-info">Info</button>
                
                        <!-- Indicates caution should be taken with this action -->
                        <button type="button" class="btn btn-warning">Warning</button>
                
                        <!-- Indicates a dangerous or potentially negative action -->
                        <button type="button" class="btn btn-danger">Danger</button>
                
                        <!-- Deemphasize a button by making it look like a link while maintaining button behavior -->
                        <button type="button" class="btn btn-link">Link</button>
                    </div>
                    <h2 id="button-tags">Button tags</h2>
                    <div class="bd-example" data-example-id=""> <a class="btn btn-primary" href="#" role="button">Link</a>
                        <button class="btn btn-primary" type="submit">Button</button>
                        <input class="btn btn-primary" value="Input" type="button">
                        <input class="btn btn-primary" value="Submit" type="submit">
                        <input class="btn btn-primary" value="Reset" type="reset">
                    </div>
                    <h2 id="outline-buttons">Outline buttons</h2>
                    <div class="bd-example" data-example-id="">
                        <button type="button" class="btn btn-outline-primary">Primary</button>
                        <button type="button" class="btn btn-outline-secondary">Secondary</button>
                        <button type="button" class="btn btn-outline-success">Success</button>
                        <button type="button" class="btn btn-outline-info">Info</button>
                        <button type="button" class="btn btn-outline-warning">Warning</button>
                        <button type="button" class="btn btn-outline-danger">Danger</button>
                    </div>
                    <h2 id="sizes">Sizes</h2>
                    <div class="bd-example" data-example-id="">
                        <button type="button" class="btn btn-primary btn-lg">Large button</button>
                        <button type="button" class="btn btn-secondary btn-lg">Large button</button>
                    </div>
                    <div class="bd-example" data-example-id="">
                        <button type="button" class="btn btn-primary btn-sm">Small button</button>
                        <button type="button" class="btn btn-secondary btn-sm">Small button</button>
                    </div>
                    <div class="bd-example" data-example-id="">
                        <button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>
                        <button type="button" class="btn btn-secondary btn-lg btn-block">Block level button</button>
                    </div>
                    <h2 id="active-state">Active state</h2>
                    <div class="bd-example" data-example-id=""> <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Primary link</a> <a href="#" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Link</a> </div>
                    <h2 id="disabled-state">Disabled state</h2>
                    <div class="bd-example" data-example-id="">
                        <button type="button" class="btn btn-lg btn-primary" disabled="">Primary button</button>
                        <button type="button" class="btn btn-secondary btn-lg" disabled="">Button</button>
                    </div>
                    <div class="bd-example" data-example-id=""> <a href="#" class="btn btn-primary btn-lg disabled" role="button" aria-disabled="true">Primary link</a> <a href="#" class="btn btn-secondary btn-lg disabled" role="button" aria-disabled="true">Link</a> </div>
                    <h2 id="button-plugin">Button plugin</h2>
                    <h3 id="toggle-states">Toggle states</h3>
                    <div class="bd-example" data-example-id="">
                        <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off"> Single toggle </button>
                    </div>
                    <h3 id="checkbox-and-radio-buttons">Checkbox and radio buttons</h3>
                    <div class="bd-example" data-example-id="">
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-primary active">
                                <input checked="" autocomplete="off" type="checkbox">
                                Checkbox 1 (pre-checked) </label>
                            <label class="btn btn-primary">
                                <input autocomplete="off" type="checkbox">
                                Checkbox 2 </label>
                            <label class="btn btn-primary">
                                <input autocomplete="off" type="checkbox">
                                Checkbox 3 </label>
                        </div>
                    </div>
                    <div class="bd-example" data-example-id="">
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-primary active">
                                <input name="options" id="option1" autocomplete="off" checked="" type="radio">
                                Radio 1 (preselected) </label>
                            <label class="btn btn-primary">
                                <input name="options" id="option2" autocomplete="off" type="radio">
                                Radio 2 </label>
                            <label class="btn btn-primary">
                                <input name="options" id="option3" autocomplete="off" type="radio">
                                Radio 3 </label>
                        </div>
                    </div>
                    <h1 class="bd-title" id="content">Button group</h1>
                    <h2 id="button-toolbar">Button toolbar</h2>
                    <div class="bd-example" data-example-id="">
                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group mr-2" role="group" aria-label="First group">
                                <button type="button" class="btn btn-secondary">1</button>
                                <button type="button" class="btn btn-secondary">2</button>
                                <button type="button" class="btn btn-secondary">3</button>
                                <button type="button" class="btn btn-secondary">4</button>
                            </div>
                            <div class="btn-group mr-2" role="group" aria-label="Second group">
                                <button type="button" class="btn btn-secondary">5</button>
                                <button type="button" class="btn btn-secondary">6</button>
                                <button type="button" class="btn btn-secondary">7</button>
                            </div>
                            <div class="btn-group" role="group" aria-label="Third group">
                                <button type="button" class="btn btn-secondary">8</button>
                            </div>
                        </div>
                    </div>
                    <div class="bd-example" data-example-id="">
                        <div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group mr-2" role="group" aria-label="First group">
                                <button type="button" class="btn btn-secondary">1</button>
                                <button type="button" class="btn btn-secondary">2</button>
                                <button type="button" class="btn btn-secondary">3</button>
                                <button type="button" class="btn btn-secondary">4</button>
                            </div>
                            <div class="input-group"> <span class="input-group-addon" id="btnGroupAddon">@</span>
                                <input class="form-control" placeholder="Input group example" aria-describedby="btnGroupAddon" type="text">
                            </div>
                        </div>
                        <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group" role="group" aria-label="First group">
                                <button type="button" class="btn btn-secondary">1</button>
                                <button type="button" class="btn btn-secondary">2</button>
                                <button type="button" class="btn btn-secondary">3</button>
                                <button type="button" class="btn btn-secondary">4</button>
                            </div>
                            <div class="input-group"> <span class="input-group-addon" id="btnGroupAddon2">@</span>
                                <input class="form-control" placeholder="Input group example" aria-describedby="btnGroupAddon2" type="text">
                            </div>
                        </div>
                    </div>
                    <h2 id="sizing">Sizing</h2>
                    <div class="bd-example">
                        <div class="btn-group btn-group-lg" role="group" aria-label="Large button group">
                            <button type="button" class="btn btn-secondary">Left</button>
                            <button type="button" class="btn btn-secondary">Middle</button>
                            <button type="button" class="btn btn-secondary">Right</button>
                        </div>
                        <br>
                        <div class="btn-group" role="group" aria-label="Default button group">
                            <button type="button" class="btn btn-secondary">Left</button>
                            <button type="button" class="btn btn-secondary">Middle</button>
                            <button type="button" class="btn btn-secondary">Right</button>
                        </div>
                        <br>
                        <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                            <button type="button" class="btn btn-secondary">Left</button>
                            <button type="button" class="btn btn-secondary">Middle</button>
                            <button type="button" class="btn btn-secondary">Right</button>
                        </div>
                    </div>
                    <h2 id="nesting">Nesting</h2>
                    <div class="bd-example" data-example-id="">
                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                            <button type="button" class="btn btn-secondary">1</button>
                            <button type="button" class="btn btn-secondary">2</button>
                            <div class="btn-group" role="group">
                                <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Dropdown </button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"> <a class="dropdown-item" href="#">Dropdown link</a> <a class="dropdown-item" href="#">Dropdown link</a> </div>
                            </div>
                        </div>
                    </div>
                    <h2 id="vertical-variation">Vertical variation</h2>
                    <div class="bd-example">
                        <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                            <button type="button" class="btn btn-secondary">Button</button>
                            <button type="button" class="btn btn-secondary">Button</button>
                            <button type="button" class="btn btn-secondary">Button</button>
                            <button type="button" class="btn btn-secondary">Button</button>
                            <button type="button" class="btn btn-secondary">Button</button>
                            <button type="button" class="btn btn-secondary">Button</button>
                        </div>
                    </div>
                    <div class="bd-example">
                        <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                            <button type="button" class="btn btn-secondary">Button</button>
                            <button type="button" class="btn btn-secondary">Button</button>
                            <div class="btn-group" role="group">
                                <button id="btnGroupVerticalDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Dropdown </button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1"> <a class="dropdown-item" href="#">Dropdown link</a> <a class="dropdown-item" href="#">Dropdown link</a> </div>
                            </div>
                            <button type="button" class="btn btn-secondary">Button</button>
                            <button type="button" class="btn btn-secondary">Button</button>
                            <div class="btn-group" role="group">
                                <button id="btnGroupVerticalDrop2" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Dropdown </button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop2"> <a class="dropdown-item" href="#">Dropdown link</a> <a class="dropdown-item" href="#">Dropdown link</a> </div>
                            </div>
                            <div class="btn-group" role="group">
                                <button id="btnGroupVerticalDrop3" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Dropdown </button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop3"> <a class="dropdown-item" href="#">Dropdown link</a> <a class="dropdown-item" href="#">Dropdown link</a> </div>
                            </div>
                            <div class="btn-group" role="group">
                                <button id="btnGroupVerticalDrop4" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Dropdown </button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop4"> <a class="dropdown-item" href="#">Dropdown link</a> <a class="dropdown-item" href="#">Dropdown link</a> </div>
                            </div>
                        </div>
                    </div>
                    <h1 class="bd-title" id="content">Cards</h1>
                    <h2 id="example">Example</h2>
                    <div class="bd-example" data-example-id="">
                        <div class="card" style="width: 20rem;"> <img class="card-img-top" data-src="holder.js/100px180/" alt="100%x180" style="height: 180px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22318%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20318%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15a87c3a1af%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A16pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15a87c3a1af%22%3E%3Crect%20width%3D%22318%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22118.01666641235352%22%20y%3D%2297.5%22%3E318x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                            <div class="card-block">
                                <h4 class="card-title">Card title</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a> </div>
                        </div>
                    </div>
                    <h2 id="content-types">Content types</h2>
                    <h3 id="blocks">Blocks</h3>
                    <div class="bd-example" data-example-id="">
                        <div class="card">
                            <div class="card-block"> This is some text within a card block. </div>
                        </div>
                    </div>
                    <h3 id="titles-text-and-links">Titles, text, and links</h3>
                    <div class="bd-example" data-example-id="">
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">Card title</h4>
                                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="card-link">Card link</a> <a href="#" class="card-link">Another link</a> </div>
                        </div>
                    </div>
                    <h3 id="images">Images</h3>
                    <div class="bd-example" data-example-id="">
                        <div class="card"> <img class="card-img-top" data-src="holder.js/100px180/?text=Image cap" alt="Image cap [100%x180]" style="height: 180px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22769%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20769%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15a87c3a1b8%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A38pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15a87c3a1b8%22%3E%3Crect%20width%3D%22769%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22266.19166564941406%22%20y%3D%22107.1%22%3EImage%20cap%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                            <div class="card-block">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <h3 id="list-groups">List groups</h3>
                    <div class="bd-example" data-example-id="">
                        <div class="card">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                            </ul>
                        </div>
                    </div>
                    <h3 id="kitchen-sink">Kitchen sink</h3>
                    <div class="bd-example" data-example-id="">
                        <div class="card" style="width: 20rem;"> <img class="card-img-top" data-src="holder.js/100px180/?text=Image cap" alt="Image cap [100%x180]" style="height: 180px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22318%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20318%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15a87c3a1bf%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A16pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15a87c3a1bf%22%3E%3Crect%20width%3D%22318%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22109.10833358764648%22%20y%3D%2297.5%22%3EImage%20cap%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                            <div class="card-block">
                                <h4 class="card-title">Card title</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                            </ul>
                            <div class="card-block"> <a href="#" class="card-link">Card link</a> <a href="#" class="card-link">Another link</a> </div>
                        </div>
                    </div>
                    <h3 id="header-and-footer">Header and footer</h3>
                    <div class="bd-example" data-example-id="">
                        <div class="card">
                            <div class="card-header"> Featured </div>
                            <div class="card-block">
                                <h4 class="card-title">Special title treatment</h4>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a> </div>
                        </div>
                    </div>
                    <div class="bd-example" data-example-id="">
                        <div class="card">
                            <h3 class="card-header">Featured</h3>
                            <div class="card-block">
                                <h4 class="card-title">Special title treatment</h4>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a> </div>
                        </div>
                    </div>
                    <div class="bd-example" data-example-id="">
                        <div class="card">
                            <div class="card-header"> Quote </div>
                            <div class="card-block">
                                <blockquote class="card-blockquote">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                    <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    <div class="bd-example" data-example-id="">
                        <div class="card text-center">
                            <div class="card-header"> Featured </div>
                            <div class="card-block">
                                <h4 class="card-title">Special title treatment</h4>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a> </div>
                            <div class="card-footer text-muted"> 2 days ago </div>
                        </div>
                    </div>
                    <h2 id="sizing">Sizing</h2>
                    <h3 id="using-grid-markup">Using grid markup</h3>
                    <div class="bd-example" data-example-id="">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-block">
                                        <h3 class="card-title">Special title treatment</h3>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a> </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-block">
                                        <h3 class="card-title">Special title treatment</h3>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 id="using-utilities">Using utilities</h3>
                    <div class="bd-example" data-example-id="">
                        <div class="card w-75">
                            <div class="card-block">
                                <h3 class="card-title">Card title</h3>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-primary">Button</a> </div>
                        </div>
                        <div class="card w-50">
                            <div class="card-block">
                                <h3 class="card-title">Card title</h3>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-primary">Button</a> </div>
                        </div>
                    </div>
                    <h3 id="using-custom-css">Using custom CSS</h3>
                    <div class="bd-example" data-example-id="">
                        <div class="card" style="width: 20rem;">
                            <div class="card-block">
                                <h3 class="card-title">Special title treatment</h3>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a> </div>
                        </div>
                    </div>
                    <h2 id="text-alignment">Text alignment</h2>
                    <div class="bd-example" data-example-id="">
                        <div class="card" style="width: 20rem;">
                            <div class="card-block">
                                <h4 class="card-title">Special title treatment</h4>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a> </div>
                        </div>
                        <div class="card text-center" style="width: 20rem;">
                            <div class="card-block">
                                <h4 class="card-title">Special title treatment</h4>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a> </div>
                        </div>
                        <div class="card text-right" style="width: 20rem;">
                            <div class="card-block">
                                <h4 class="card-title">Special title treatment</h4>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a> </div>
                        </div>
                    </div>
                    <h2 id="navigation">Navigation</h2>
                    <div class="bd-example" data-example-id="">
                        <div class="card text-center">
                            <div class="card-header">
                                <ul class="nav nav-tabs card-header-tabs">
                                    <li class="nav-item"> <a class="nav-link active" href="#">Active</a> </li>
                                    <li class="nav-item"> <a class="nav-link" href="#">Link</a> </li>
                                    <li class="nav-item"> <a class="nav-link disabled" href="#">Disabled</a> </li>
                                </ul>
                            </div>
                            <div class="card-block">
                                <h4 class="card-title">Special title treatment</h4>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a> </div>
                        </div>
                    </div>
                    <div class="bd-example" data-example-id="">
                        <div class="card text-center">
                            <div class="card-header">
                                <ul class="nav nav-pills card-header-pills">
                                    <li class="nav-item"> <a class="nav-link active" href="#">Active</a> </li>
                                    <li class="nav-item"> <a class="nav-link" href="#">Link</a> </li>
                                    <li class="nav-item"> <a class="nav-link disabled" href="#">Disabled</a> </li>
                                </ul>
                            </div>
                            <div class="card-block">
                                <h4 class="card-title">Special title treatment</h4>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a> </div>
                        </div>
                    </div>
                    <h2 id="images-1">Images</h2>
                    <h3 id="image-caps">Image caps</h3>
                    <div class="bd-example" data-example-id="">
                        <div class="card mb-3"> <img class="card-img-top" data-src="holder.js/100px180/" alt="100%x180" style="height: 180px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22769%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20769%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15a87c3a1c6%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A38pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15a87c3a1c6%22%3E%3Crect%20width%3D%22769%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22287.28333282470703%22%20y%3D%22107.1%22%3E769x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                            <div class="card-block">
                                <h4 class="card-title">Card title</h4>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">Card title</h4>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                            <img class="card-img-bottom" data-src="holder.js/100px180/" alt="100%x180" style="height: 180px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22769%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20769%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15a87c3a1cc%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A38pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15a87c3a1cc%22%3E%3Crect%20width%3D%22769%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22287.28333282470703%22%20y%3D%22107.1%22%3E769x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true"> </div>
                    </div>
                    <h3 id="image-overlays">Image overlays</h3>
                    <div class="bd-example" data-example-id="">
                        <div class="card card-inverse"> <img class="card-img" data-src="holder.js/100px270/#55595c:#373a3c/text:Card image" alt="100%x270" style="height: 270px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22769%22%20height%3D%22270%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20769%20270%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15a87c3a1d3%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A38pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15a87c3a1d3%22%3E%3Crect%20width%3D%22769%22%20height%3D%22270%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22287.28333282470703%22%20y%3D%22152.1%22%3E769x270%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                            <div class="card-img-overlay">
                                <h4 class="card-title">Card title</h4>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                    <h2 id="card-styles">Card styles</h2>
                    <h3 id="inverted-text">Inverted text</h3>
                    <div class="bd-example" data-example-id="">
                        <div class="card card-inverse" style="background-color: #333; border-color: #333;">
                            <div class="card-block">
                                <h3 class="card-title">Special title treatment</h3>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a> </div>
                        </div>
                    </div>
                    <h3 id="background-variants">Background variants</h3>
                    <div class="bd-example" data-example-id="">
                        <div class="card card-inverse card-primary mb-3 text-center">
                            <div class="card-block">
                                <blockquote class="card-blockquote">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                    <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                </blockquote>
                            </div>
                        </div>
                        <div class="card card-inverse card-success mb-3 text-center">
                            <div class="card-block">
                                <blockquote class="card-blockquote">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                    <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                </blockquote>
                            </div>
                        </div>
                        <div class="card card-inverse card-info mb-3 text-center">
                            <div class="card-block">
                                <blockquote class="card-blockquote">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                    <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                </blockquote>
                            </div>
                        </div>
                        <div class="card card-inverse card-warning mb-3 text-center">
                            <div class="card-block">
                                <blockquote class="card-blockquote">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                    <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                </blockquote>
                            </div>
                        </div>
                        <div class="card card-inverse card-danger text-center">
                            <div class="card-block">
                                <blockquote class="card-blockquote">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                    <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    <h3 id="outline-cards">Outline cards</h3>
                    <div class="bd-example" data-example-id="">
                        <div class="card card-outline-primary mb-3 text-center">
                            <div class="card-block">
                                <blockquote class="card-blockquote">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                    <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                </blockquote>
                            </div>
                        </div>
                        <div class="card card-outline-secondary mb-3 text-center">
                            <div class="card-block">
                                <blockquote class="card-blockquote">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                    <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                </blockquote>
                            </div>
                        </div>
                        <div class="card card-outline-success mb-3 text-center">
                            <div class="card-block">
                                <blockquote class="card-blockquote">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                    <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                </blockquote>
                            </div>
                        </div>
                        <div class="card card-outline-info mb-3 text-center">
                            <div class="card-block">
                                <blockquote class="card-blockquote">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                    <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                </blockquote>
                            </div>
                        </div>
                        <div class="card card-outline-warning mb-3 text-center">
                            <div class="card-block">
                                <blockquote class="card-blockquote">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                    <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                </blockquote>
                            </div>
                        </div>
                        <div class="card card-outline-danger text-center">
                            <div class="card-block">
                                <blockquote class="card-blockquote">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                    <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    <h2 id="card-layout">Card layout</h2>
                    <h3 id="card-groups">Card groups</h3>
                    <div class="bd-example" data-example-id="">
                        <div class="card-group">
                            <div class="card"> <img class="card-img-top" data-src="holder.js/100px180/" alt="100%x180" style="height: 180px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22256%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20256%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15a87c3a1df%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15a87c3a1df%22%3E%3Crect%20width%3D%22256%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2294.76666641235352%22%20y%3D%2296%22%3E256x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                                <div class="card-block">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                            <div class="card"> <img class="card-img-top" data-src="holder.js/100px180/" alt="100%x180" style="height: 180px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22256%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20256%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15a87c3a1e2%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15a87c3a1e2%22%3E%3Crect%20width%3D%22256%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2294.76666641235352%22%20y%3D%2296%22%3E256x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                                <div class="card-block">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                            <div class="card"> <img class="card-img-top" data-src="holder.js/100px180/" alt="100%x180" style="height: 180px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22256%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20256%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15a87c3a1e7%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15a87c3a1e7%22%3E%3Crect%20width%3D%22256%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2294.76666641235352%22%20y%3D%2296%22%3E256x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                                <div class="card-block">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bd-example" data-example-id="">
                        <div class="card-group">
                            <div class="card"> <img class="card-img-top" data-src="holder.js/100px180/" alt="100%x180" style="height: 180px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22256%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20256%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15a87c3a1ef%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15a87c3a1ef%22%3E%3Crect%20width%3D%22256%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2294.76666641235352%22%20y%3D%2296%22%3E256x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                                <div class="card-block">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                                <div class="card-footer"> <small class="text-muted">Last updated 3 mins ago</small> </div>
                            </div>
                            <div class="card"> <img class="card-img-top" data-src="holder.js/100px180/" alt="100%x180" style="height: 180px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22256%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20256%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15a87c3a1f4%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15a87c3a1f4%22%3E%3Crect%20width%3D%22256%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2294.76666641235352%22%20y%3D%2296%22%3E256x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                                <div class="card-block">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                </div>
                                <div class="card-footer"> <small class="text-muted">Last updated 3 mins ago</small> </div>
                            </div>
                            <div class="card"> <img class="card-img-top" data-src="holder.js/100px180/" alt="100%x180" style="height: 180px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22256%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20256%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15a87c3a1fa%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15a87c3a1fa%22%3E%3Crect%20width%3D%22256%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2294.76666641235352%22%20y%3D%2296%22%3E256x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                                <div class="card-block">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                </div>
                                <div class="card-footer"> <small class="text-muted">Last updated 3 mins ago</small> </div>
                            </div>
                        </div>
                    </div>
                    <h3 id="card-decks">Card decks</h3>
                    <div class="bd-example" data-example-id="">
                        <div class="card-deck">
                            <div class="card"> <img class="card-img-top" data-src="holder.js/100px200/" alt="100%x200" style="height: 200px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22235%22%20height%3D%22200%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20235%20200%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15a87c3a200%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A12pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15a87c3a200%22%3E%3Crect%20width%3D%22235%22%20height%3D%22200%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2286.79999923706055%22%20y%3D%22105.7%22%3E235x200%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                                <div class="card-block">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                            <div class="card"> <img class="card-img-top" data-src="holder.js/100px200/" alt="100%x200" style="height: 200px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22235%22%20height%3D%22200%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20235%20200%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15a87c3a202%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A12pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15a87c3a202%22%3E%3Crect%20width%3D%22235%22%20height%3D%22200%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2286.79999923706055%22%20y%3D%22105.7%22%3E235x200%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                                <div class="card-block">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                            <div class="card"> <img class="card-img-top" data-src="holder.js/100px200/" alt="100%x200" style="height: 200px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22235%22%20height%3D%22200%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20235%20200%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15a87c3a207%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A12pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15a87c3a207%22%3E%3Crect%20width%3D%22235%22%20height%3D%22200%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2286.79999923706055%22%20y%3D%22105.7%22%3E235x200%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                                <div class="card-block">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bd-example" data-example-id="">
                        <div class="card-deck">
                            <div class="card"> <img class="card-img-top" data-src="holder.js/100px180/" alt="100%x180" style="height: 180px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22235%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20235%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15a87c3a20e%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A12pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15a87c3a20e%22%3E%3Crect%20width%3D%22235%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2286.79999923706055%22%20y%3D%2295.7%22%3E235x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                                <div class="card-block">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                                <div class="card-footer"> <small class="text-muted">Last updated 3 mins ago</small> </div>
                            </div>
                            <div class="card"> <img class="card-img-top" data-src="holder.js/100px180/" alt="100%x180" style="height: 180px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22235%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20235%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15a87c3a211%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A12pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15a87c3a211%22%3E%3Crect%20width%3D%22235%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2286.79999923706055%22%20y%3D%2295.7%22%3E235x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                                <div class="card-block">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                </div>
                                <div class="card-footer"> <small class="text-muted">Last updated 3 mins ago</small> </div>
                            </div>
                            <div class="card"> <img class="card-img-top" data-src="holder.js/100px180/" alt="100%x180" style="height: 180px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22235%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20235%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15a87c3a216%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A12pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15a87c3a216%22%3E%3Crect%20width%3D%22235%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2286.79999923706055%22%20y%3D%2295.7%22%3E235x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                                <div class="card-block">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                </div>
                                <div class="card-footer"> <small class="text-muted">Last updated 3 mins ago</small> </div>
                            </div>
                        </div>
                    </div>
                    <h3 id="card-columns">Card columns</h3>
                    <div class="bd-example" data-example-id="">
                        <div class="card-columns">
                            <div class="card"> <img class="card-img-top img-fluid" data-src="holder.js/100px160/" alt="100%x160" style="height: 160px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22242%22%20height%3D%22160%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20242%20160%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15a87c3a21b%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A12pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15a87c3a21b%22%3E%3Crect%20width%3D%22242%22%20height%3D%22160%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2290.29999923706055%22%20y%3D%2285.7%22%3E242x160%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                                <div class="card-block">
                                    <h4 class="card-title">Card title that wraps to a new line</h4>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                            <div class="card p-3">
                                <blockquote class="card-block card-blockquote">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                    <footer> <small class="text-muted"> Someone famous in <cite title="Source Title">Source Title</cite> </small> </footer>
                                </blockquote>
                            </div>
                            <div class="card"> <img class="card-img-top img-fluid" data-src="holder.js/100px160/" alt="100%x160" style="height: 160px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22242%22%20height%3D%22160%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20242%20160%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15a87c3a221%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A12pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15a87c3a221%22%3E%3Crect%20width%3D%22242%22%20height%3D%22160%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2290.29999923706055%22%20y%3D%2285.7%22%3E242x160%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                                <div class="card-block">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                            <div class="card card-inverse card-primary p-3 text-center">
                                <blockquote class="card-blockquote">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
                                    <footer> <small> Someone famous in <cite title="Source Title">Source Title</cite> </small> </footer>
                                </blockquote>
                            </div>
                            <div class="card text-center">
                                <div class="card-block">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                            <div class="card"> <img class="card-img img-fluid" data-src="holder.js/100px260/" alt="100%x260" style="height: 260px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22242%22%20height%3D%22260%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20242%20260%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15a87c3a22f%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15a87c3a22f%22%3E%3Crect%20width%3D%22242%22%20height%3D%22260%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2287.76666641235352%22%20y%3D%22136%22%3E242x260%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true"> </div>
                            <div class="card p-3 text-right">
                                <blockquote class="card-blockquote">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                    <footer> <small class="text-muted"> Someone famous in <cite title="Source Title">Source Title</cite> </small> </footer>
                                </blockquote>
                            </div>
                            <div class="card">
                                <div class="card-block">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h1 class="bd-title" id="content">Carousel</h1>
                    <h2 id="example">Example</h2>
                    <h3 id="slides-only">Slides only</h3>
                    <div class="bd-example" data-example-id="">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item"> <img class="d-block img-fluid" data-src="holder.js/800x400?auto=yes&amp;bg=777&amp;fg=555&amp;text=First slide" alt="First slide [800x400]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15a87cb1ba5%20text%20%7B%20fill%3A%23555%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15a87cb1ba5%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22285.9000015258789%22%20y%3D%22218.3%22%3EFirst%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true"> </div>
                                <div class="carousel-item"> <img class="d-block img-fluid" data-src="holder.js/800x400?auto=yes&amp;bg=666&amp;fg=444&amp;text=Second slide" alt="Second slide [800x400]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15a87cb1ba8%20text%20%7B%20fill%3A%23444%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15a87cb1ba8%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23666%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22247.2916717529297%22%20y%3D%22218.3%22%3ESecond%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true"> </div>
                                <div class="carousel-item active"> <img class="d-block img-fluid" data-src="holder.js/800x400?auto=yes&amp;bg=555&amp;fg=333&amp;text=Third slide" alt="Third slide [800x400]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15a87cb1baa%20text%20%7B%20fill%3A%23333%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15a87cb1baa%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23555%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22276.9749984741211%22%20y%3D%22218.3%22%3EThird%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true"> </div>
                            </div>
                        </div>
                    </div>
                    <h3 id="with-controls">With controls</h3>
                    <div class="bd-example" data-example-id="">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item"> <img class="d-block img-fluid" data-src="holder.js/800x400?auto=yes&amp;bg=777&amp;fg=555&amp;text=First slide" alt="First slide [800x400]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15a87cb1bac%20text%20%7B%20fill%3A%23555%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15a87cb1bac%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22285.9000015258789%22%20y%3D%22218.3%22%3EFirst%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true"> </div>
                                <div class="carousel-item"> <img class="d-block img-fluid" data-src="holder.js/800x400?auto=yes&amp;bg=666&amp;fg=444&amp;text=Second slide" alt="Second slide [800x400]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15a87cb1bae%20text%20%7B%20fill%3A%23444%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15a87cb1bae%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23666%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22247.2916717529297%22%20y%3D%22218.3%22%3ESecond%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true"> </div>
                                <div class="carousel-item active"> <img class="d-block img-fluid" data-src="holder.js/800x400?auto=yes&amp;bg=555&amp;fg=333&amp;text=Third slide" alt="Third slide [800x400]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15a87cb1baf%20text%20%7B%20fill%3A%23333%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15a87cb1baf%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23555%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22276.9749984741211%22%20y%3D%22218.3%22%3EThird%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true"> </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                    </div>
                    <h3 id="with-indicators">With indicators</h3>
                    <div class="bd-example" data-example-id="">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item"> <img class="d-block img-fluid" data-src="holder.js/800x400?auto=yes&amp;bg=777&amp;fg=555&amp;text=First slide" alt="First slide [800x400]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15a87cb1bb1%20text%20%7B%20fill%3A%23555%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15a87cb1bb1%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22285.9000015258789%22%20y%3D%22218.3%22%3EFirst%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true"> </div>
                                <div class="carousel-item"> <img class="d-block img-fluid" data-src="holder.js/800x400?auto=yes&amp;bg=666&amp;fg=444&amp;text=Second slide" alt="Second slide [800x400]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15a87cb1bb3%20text%20%7B%20fill%3A%23444%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15a87cb1bb3%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23666%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22247.2916717529297%22%20y%3D%22218.3%22%3ESecond%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true"> </div>
                                <div class="carousel-item active"> <img class="d-block img-fluid" data-src="holder.js/800x400?auto=yes&amp;bg=555&amp;fg=333&amp;text=Third slide" alt="Third slide [800x400]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15a87cb1bb4%20text%20%7B%20fill%3A%23333%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15a87cb1bb4%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23555%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22276.9749984741211%22%20y%3D%22218.3%22%3EThird%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true"> </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                    </div>
                    <h3 id="with-captions">With captions</h3>
                    <div class="bd-example">
                        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleCaptions" data-slide-to="0" class=""></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="1" class="active"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="2" class=""></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item"> <img class="d-block img-fluid" data-src="holder.js/800x400?auto=yes&amp;bg=777&amp;fg=555&amp;text=First slide" alt="First slide [800x400]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15a87cb1bb7%20text%20%7B%20fill%3A%23555%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15a87cb1bb7%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22285.9000015258789%22%20y%3D%22218.3%22%3EFirst%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3>First slide label</h3>
                                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                    </div>
                                </div>
                                <div class="carousel-item active"> <img class="d-block img-fluid" data-src="holder.js/800x400?auto=yes&amp;bg=666&amp;fg=444&amp;text=Second slide" alt="Second slide [800x400]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15a87cb1bbb%20text%20%7B%20fill%3A%23444%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15a87cb1bbb%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23666%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22247.2916717529297%22%20y%3D%22218.3%22%3ESecond%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3>Second slide label</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                                <div class="carousel-item"> <img class="d-block img-fluid" data-src="holder.js/800x400?auto=yes&amp;bg=555&amp;fg=333&amp;text=Third slide" alt="Third slide [800x400]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15a87cb1bbd%20text%20%7B%20fill%3A%23333%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15a87cb1bbd%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23555%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22276.9749984741211%22%20y%3D%22218.3%22%3EThird%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3>Third slide label</h3>
                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                    </div>
                    <h1 class="bd-title" id="content">Collapse</h1>
                    <h2 id="example">Example</h2>
                    <div class="bd-example" data-example-id="">
                        <p> <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"> Link with href </a>
                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"> Button with data-target </button>
                        </p>
                        <div class="collapse" id="collapseExample">
                            <div class="card card-block"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. </div>
                        </div>
                    </div>
                    <h2 id="accordion-example">Accordion example</h2>
                    <div class="bd-example" data-example-id="">
                        <div id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="card">
                                <div class="card-header" role="tab" id="headingOne">
                                    <h5 class="mb-0"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Collapsible Group Item #1 </a> </h5>
                                </div>
                                <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="card-block"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="headingTwo">
                                    <h5 class="mb-0"> <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> Collapsible Group Item #2 </a> </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="card-block"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="headingThree">
                                    <h5 class="mb-0"> <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Collapsible Group Item #3 </a> </h5>
                                </div>
                                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="card-block"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h1 class="bd-title" id="content">Dropdowns</h1>
                    <h2 id="examples">Examples</h2>
                    <h3 id="single-button-dropdowns">Single button dropdowns</h3>
                    <div class="bd-example" data-example-id="">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Dropdown button </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a> </div>
                        </div>
                    </div>
                    <div class="bd-example" data-example-id="">
                        <div class="dropdown"> <a class="btn btn-secondary dropdown-toggle" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Dropdown link </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink"> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a> </div>
                        </div>
                    </div>
                    <div class="bd-example">
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Primary</button>
                            <div class="dropdown-menu"> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a> </div>
                        </div>
                        <!-- /btn-group -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Secondary</button>
                            <div class="dropdown-menu"> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a> </div>
                        </div>
                        <!-- /btn-group -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Success</button>
                            <div class="dropdown-menu"> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a> </div>
                        </div>
                        <!-- /btn-group -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Info</button>
                            <div class="dropdown-menu"> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a> </div>
                        </div>
                        <!-- /btn-group -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Warning</button>
                            <div class="dropdown-menu"> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a> </div>
                        </div>
                        <!-- /btn-group -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Danger</button>
                            <div class="dropdown-menu"> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a> </div>
                        </div>
                        <!-- /btn-group -->
                    </div>
                    <h3 id="split-button-dropdowns">Split button dropdowns</h3>
                    <div class="bd-example">
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary">Primary</button>
                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Toggle Dropdown</span> </button>
                            <div class="dropdown-menu"> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a> </div>
                        </div>
                        <!-- /btn-group -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary">Secondary</button>
                            <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Toggle Dropdown</span> </button>
                            <div class="dropdown-menu"> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a> </div>
                        </div>
                        <!-- /btn-group -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-success">Success</button>
                            <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Toggle Dropdown</span> </button>
                            <div class="dropdown-menu"> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a> </div>
                        </div>
                        <!-- /btn-group -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-info">Info</button>
                            <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Toggle Dropdown</span> </button>
                            <div class="dropdown-menu"> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a> </div>
                        </div>
                        <!-- /btn-group -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-warning">Warning</button>
                            <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Toggle Dropdown</span> </button>
                            <div class="dropdown-menu"> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a> </div>
                        </div>
                        <!-- /btn-group -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-danger">Danger</button>
                            <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Toggle Dropdown</span> </button>
                            <div class="dropdown-menu"> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a> </div>
                        </div>
                        <!-- /btn-group -->
                    </div>
                    <h2 id="sizing">Sizing</h2>
                    <div class="bd-example">
                        <div class="btn-toolbar" role="toolbar">
                            <div class="btn-group">
                                <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Large button </button>
                                <div class="dropdown-menu"> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a> </div>
                            </div>
                            <!-- /btn-group -->
                            <div class="btn-group ml-2">
                                <button type="button" class="btn btn-lg btn-secondary">Large split button</button>
                                <button type="button" class="btn btn-lg btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Toggle Dropdown</span> </button>
                                <div class="dropdown-menu"> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a> </div>
                            </div>
                            <!-- /btn-group -->
                        </div>
                        <!-- /btn-toolbar -->
                        <div class="btn-toolbar" role="toolbar">
                            <div class="btn-group">
                                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Small button </button>
                                <div class="dropdown-menu"> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a> </div>
                            </div>
                            <!-- /btn-group -->
                            <div class="btn-group ml-2">
                                <button type="button" class="btn btn-sm btn-secondary">Small split button</button>
                                <button type="button" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Toggle Dropdown</span> </button>
                                <div class="dropdown-menu"> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a> </div>
                            </div>
                            <!-- /btn-group -->
                        </div>
                        <!-- /btn-toolbar -->
                    </div>
                    <h2 id="dropup-variation">Dropup variation</h2>
                    <div class="bd-example">
                        <div class="btn-group dropup">
                            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Dropup </button>
                            <div class="dropdown-menu"> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a> </div>
                        </div>
                        <div class="btn-group dropup">
                            <button type="button" class="btn btn-secondary"> Split dropup </button>
                            <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Toggle Dropdown</span> </button>
                            <div class="dropdown-menu"> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a> </div>
                        </div>
                    </div>
                    <h2 id="menu-items">Menu items</h2>
                    <div class="bd-example" data-example-id="">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Dropdown </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <button class="dropdown-item" type="button">Action</button>
                                <button class="dropdown-item" type="button">Another action</button>
                                <button class="dropdown-item" type="button">Something else here</button>
                            </div>
                        </div>
                    </div>
                    <h2 id="menu-alignment">Menu alignment</h2>
                    <div class="bd-example" data-example-id="">
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> This dropdown's menu is right-aligned </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <button class="dropdown-item" type="button">Action</button>
                                <button class="dropdown-item" type="button">Another action</button>
                                <button class="dropdown-item" type="button">Something else here</button>
                            </div>
                        </div>
                    </div>
                    <h2 id="menu-headers">Menu headers</h2>
                    <div class="bd-example" data-example-id="">
                        <div class="dropdown-menu">
                            <h6 class="dropdown-header">Dropdown header</h6>
                            <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> </div>
                    </div>
                    <h2 id="menu-dividers">Menu dividers</h2>
                    <div class="bd-example" data-example-id="">
                        <div class="dropdown-menu"> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a> </div>
                    </div>
                    <h2 id="disabled-menu-items">Disabled menu items</h2>
                    <div class="bd-example" data-example-id="">
                        <div class="dropdown-menu"> <a class="dropdown-item" href="#">Regular link</a> <a class="dropdown-item disabled" href="#">Disabled link</a> <a class="dropdown-item" href="#">Another link</a> </div>
                    </div>
                    <h1 class="bd-title" id="content">Forms</h1>
                    <h2 id="form-controls">Form controls</h2>
                    <div class="bd-example" data-example-id="">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" type="email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input class="form-control" id="exampleInputPassword1" placeholder="Password" type="password">
                            </div>
                            <div class="form-group">
                                <label for="exampleSelect1">Example select</label>
                                <select class="form-control" id="exampleSelect1">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleSelect2">Example multiple select</label>
                                <select multiple="" class="form-control" id="exampleSelect2">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleTextarea">Example textarea</label>
                                <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <input class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" type="file">
                                <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small> </div>
                            <fieldset class="form-group">
                                <legend>Radio buttons</legend>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked="" type="radio">
                                        Option one is this and that—be sure to include why it's great </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2" type="radio">
                                        Option two can be something else and selecting it will deselect option one </label>
                                </div>
                                <div class="form-check disabled">
                                    <label class="form-check-label">
                                        <input class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option3" disabled="" type="radio">
                                        Option three is disabled </label>
                                </div>
                            </fieldset>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox">
                                    Check me out </label>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <h3 id="textual-inputs">Textual inputs</h3>
                    <div class="bd-example" data-example-id="">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-2 col-form-label">Text</label>
                            <div class="col-10">
                                <input class="form-control" value="Artisanal kale" id="example-text-input" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-search-input" class="col-2 col-form-label">Search</label>
                            <div class="col-10">
                                <input class="form-control" value="How do I shoot web" id="example-search-input" type="search">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-email-input" class="col-2 col-form-label">Email</label>
                            <div class="col-10">
                                <input class="form-control" value="bootstrap@example.com" id="example-email-input" type="email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-url-input" class="col-2 col-form-label">URL</label>
                            <div class="col-10">
                                <input class="form-control" value="https://getbootstrap.com" id="example-url-input" type="url">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-tel-input" class="col-2 col-form-label">Telephone</label>
                            <div class="col-10">
                                <input class="form-control" value="1-(555)-555-5555" id="example-tel-input" type="tel">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-password-input" class="col-2 col-form-label">Password</label>
                            <div class="col-10">
                                <input class="form-control" value="hunter2" id="example-password-input" type="password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-number-input" class="col-2 col-form-label">Number</label>
                            <div class="col-10">
                                <input class="form-control" value="42" id="example-number-input" type="number">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-datetime-local-input" class="col-2 col-form-label">Date and time</label>
                            <div class="col-10">
                                <input class="form-control" value="2011-08-19T13:45:00" id="example-datetime-local-input" type="datetime-local">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-date-input" class="col-2 col-form-label">Date</label>
                            <div class="col-10">
                                <input class="form-control" value="2011-08-19" id="example-date-input" type="date">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-month-input" class="col-2 col-form-label">Month</label>
                            <div class="col-10">
                                <input class="form-control" value="2011-08" id="example-month-input" type="month">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-week-input" class="col-2 col-form-label">Week</label>
                            <div class="col-10">
                                <input class="form-control" value="2011-W33" id="example-week-input" type="week">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-time-input" class="col-2 col-form-label">Time</label>
                            <div class="col-10">
                                <input class="form-control" value="13:45:00" id="example-time-input" type="time">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-color-input" class="col-2 col-form-label">Color</label>
                            <div class="col-10">
                                <input class="form-control" value="#563d7c" id="example-color-input" type="color">
                            </div>
                        </div>
                    </div>
                    <h2 id="form-layouts">Form layouts</h2>
                    <h3 id="form-groups">Form groups</h3>
                    <div class="bd-example" data-example-id="">
                        <form>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Example label</label>
                                <input class="form-control" id="formGroupExampleInput" placeholder="Example input" type="text">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Another label</label>
                                <input class="form-control" id="formGroupExampleInput2" placeholder="Another input" type="text">
                            </div>
                        </form>
                    </div>
                    <h3 id="inline-forms">Inline forms</h3>
                    <div class="bd-example" data-example-id="">
                        <form class="form-inline">
                            <label class="sr-only" for="inlineFormInput">Name</label>
                            <input class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" placeholder="Jane Doe" type="text">
                            <label class="sr-only" for="inlineFormInputGroup">Username</label>
                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                <div class="input-group-addon">@</div>
                                <input class="form-control" id="inlineFormInputGroup" placeholder="Username" type="text">
                            </div>
                            <div class="form-check mb-2 mr-sm-2 mb-sm-0">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox">
                                    Remember me </label>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <div class="bd-example" data-example-id="">
                        <form class="form-inline">
                            <label class="mr-sm-2" for="inlineFormCustomSelect">Preference</label>
                            <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
                                <option selected="">Choose...</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                <input class="custom-control-input" type="checkbox">
                                <span class="custom-control-indicator"></span> <span class="custom-control-description">Remember my preference</span> </label>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <h3 id="using-the-grid">Using the Grid</h3>
                    <div class="bd-example" data-example-id="">
                        <div class="container">
                            <form>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="inputEmail3" placeholder="Email" type="email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="inputPassword3" placeholder="Password" type="password">
                                    </div>
                                </div>
                                <fieldset class="form-group row">
                                    <legend class="col-form-legend col-sm-2">Radios</legend>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" name="gridRadios" id="gridRadios1" value="option1" checked="" type="radio">
                                                Option one is this and that—be sure to include why it's great </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" name="gridRadios" id="gridRadios2" value="option2" type="radio">
                                                Option two can be something else and selecting it will deselect option one </label>
                                        </div>
                                        <div class="form-check disabled">
                                            <label class="form-check-label">
                                                <input class="form-check-input" name="gridRadios" id="gridRadios3" value="option3" disabled="" type="radio">
                                                Option three is disabled </label>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="form-group row">
                                    <label class="col-sm-2">Checkbox</label>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox">
                                                Check me out </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary">Sign in</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="bd-example" data-example-id="">
                        <div class="container">
                            <form>
                                <div class="form-group row">
                                    <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
                                    <div class="col-sm-10">
                                        <input class="form-control form-control-lg" id="lgFormGroupInput" placeholder="you@example.com" type="email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Email</label>
                                    <div class="col-sm-10">
                                        <input class="form-control form-control-sm" id="smFormGroupInput" placeholder="you@example.com" type="email">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <h2 id="checkboxes-and-radios">Checkboxes and radios</h2>
                    <h3 id="default-stacked">Default (stacked)</h3>
                    <div class="bd-example" data-example-id="">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" value="" type="checkbox">
                                Option one is this and that—be sure to include why it's great </label>
                        </div>
                        <div class="form-check disabled">
                            <label class="form-check-label">
                                <input class="form-check-input" value="" disabled="" type="checkbox">
                                Option two is disabled </label>
                        </div>
                    </div>
                    <div class="bd-example" data-example-id="">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" name="exampleRadios" id="exampleRadios1" value="option1" checked="" type="radio">
                                Option one is this and that—be sure to include why it's great </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" name="exampleRadios" id="exampleRadios2" value="option2" type="radio">
                                Option two can be something else and selecting it will deselect option one </label>
                        </div>
                        <div class="form-check disabled">
                            <label class="form-check-label">
                                <input class="form-check-input" name="exampleRadios" id="exampleRadios3" value="option3" disabled="" type="radio">
                                Option three is disabled </label>
                        </div>
                    </div>
                    <h3 id="inline">Inline</h3>
                    <div class="bd-example" data-example-id="">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" id="inlineCheckbox1" value="option1" type="checkbox">
                                1 </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" id="inlineCheckbox2" value="option2" type="checkbox">
                                2 </label>
                        </div>
                        <div class="form-check form-check-inline disabled">
                            <label class="form-check-label">
                                <input class="form-check-input" id="inlineCheckbox3" value="option3" disabled="" type="checkbox">
                                3 </label>
                        </div>
                    </div>
                    <div class="bd-example" data-example-id="">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" name="inlineRadioOptions" id="inlineRadio1" value="option1" type="radio">
                                1 </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" name="inlineRadioOptions" id="inlineRadio2" value="option2" type="radio">
                                2 </label>
                        </div>
                        <div class="form-check form-check-inline disabled">
                            <label class="form-check-label">
                                <input class="form-check-input" name="inlineRadioOptions" id="inlineRadio3" value="option3" disabled="" type="radio">
                                3 </label>
                        </div>
                    </div>
                    <h3 id="without-labels">Without labels</h3>
                    <div class="bd-example" data-example-id="">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" id="blankCheckbox" value="option1" aria-label="..." type="checkbox">
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" name="blankRadio" id="blankRadio1" value="option1" aria-label="..." type="radio">
                            </label>
                        </div>
                    </div>
                    <h2 id="static-controls">Static controls</h2>
                    <div class="bd-example" data-example-id="">
                        <form>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <p class="form-control-static">email@example.com</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="inputPassword" placeholder="Password" type="password">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="bd-example" data-example-id="">
                        <form class="form-inline">
                            <div class="form-group">
                                <label class="sr-only">Email</label>
                                <p class="form-control-static">email@example.com</p>
                            </div>
                            <div class="form-group mx-sm-3">
                                <label for="inputPassword2" class="sr-only">Password</label>
                                <input class="form-control" id="inputPassword2" placeholder="Password" type="password">
                            </div>
                            <button type="submit" class="btn btn-primary">Confirm identity</button>
                        </form>
                    </div>
                    <h2 id="disabled-states">Disabled states</h2>
                    <div class="bd-example" data-example-id="">
                        <form>
                            <fieldset disabled>
                                <div class="form-group">
                                    <label for="disabledTextInput">Disabled input</label>
                                    <input id="disabledTextInput" class="form-control" placeholder="Disabled input" type="text">
                                </div>
                                <div class="form-group">
                                    <label for="disabledSelect">Disabled select menu</label>
                                    <select id="disabledSelect" class="form-control">
                                        <option>Disabled select</option>
                                    </select>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox">
                                        Can't check this </label>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </fieldset>
                        </form>
                    </div>
                    <h2 id="readonly-inputs">Readonly inputs</h2>
                    <div class="bd-example" data-example-id="">
                        <input class="form-control" placeholder="Readonly input here…" readonly type="text">
                    </div>
                    <h2 id="control-sizing">Control sizing</h2>
                    <div class="bd-example" data-example-id="">
                        <input class="form-control form-control-lg" placeholder=".form-control-lg" type="text">
                        <input class="form-control" placeholder="Default input" type="text">
                        <input class="form-control form-control-sm" placeholder=".form-control-sm" type="text">
                    </div>
                    <div class="bd-example" data-example-id="">
                        <select class="form-control form-control-lg">
                            <option>Large select</option>
                        </select>
                        <select class="form-control">
                            <option>Default select</option>
                        </select>
                        <select class="form-control form-control-sm">
                            <option>Small select</option>
                        </select>
                    </div>
                    <h2 id="column-sizing">Column sizing</h2>
                    <div class="bd-example" data-example-id="">
                        <div class="row">
                            <div class="col-2">
                                <input class="form-control" placeholder=".col-2" type="text">
                            </div>
                            <div class="col-3">
                                <input class="form-control" placeholder=".col-3" type="text">
                            </div>
                            <div class="col-4">
                                <input class="form-control" placeholder=".col-4" type="text">
                            </div>
                        </div>
                    </div>
                    <h2 id="help-text">Help text</h2>
                    <h3 id="block-level">Block level</h3>
                    <div class="bd-example" data-example-id="">
                        <label for="inputPassword5">Password</label>
                        <input id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" type="password">
                        <p id="passwordHelpBlock" class="form-text text-muted"> Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji. </p>
                    </div>
                    <h3 id="inline-1">Inline</h3>
                    <div class="bd-example" data-example-id="">
                        <form class="form-inline">
                            <div class="form-group">
                                <label for="inputPassword4">Password</label>
                                <input id="inputPassword4" class="form-control mx-sm-3" aria-describedby="passwordHelpInline" type="password">
                                <small id="passwordHelpInline" class="text-muted"> Must be 8-20 characters long. </small> </div>
                        </form>
                    </div>
                    <h2 id="validation">Validation</h2>
                    <h3 id="examples">Examples</h3>
                    <div class="bd-example" data-example-id="">
                        <div class="form-group has-success">
                            <label class="form-control-label" for="inputSuccess1">Input with success</label>
                            <input class="form-control form-control-success" id="inputSuccess1" type="text">
                            <div class="form-control-feedback">Success! You've done it.</div>
                            <small class="form-text text-muted">Example help text that remains unchanged.</small> </div>
                        <div class="form-group has-warning">
                            <label class="form-control-label" for="inputWarning1">Input with warning</label>
                            <input class="form-control form-control-warning" id="inputWarning1" type="text">
                            <div class="form-control-feedback">Shucks, check the formatting of that and try again.</div>
                            <small class="form-text text-muted">Example help text that remains unchanged.</small> </div>
                        <div class="form-group has-danger">
                            <label class="form-control-label" for="inputDanger1">Input with danger</label>
                            <input class="form-control form-control-danger" id="inputDanger1" type="text">
                            <div class="form-control-feedback">Sorry, that username's taken. Try another?</div>
                            <small class="form-text text-muted">Example help text that remains unchanged.</small> </div>
                    </div>
                    <div class="bd-example" data-example-id="">
                        <div class="container">
                            <form>
                                <div class="form-group row has-success">
                                    <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input class="form-control form-control-success" id="inputHorizontalSuccess" placeholder="name@example.com" type="email">
                                        <div class="form-control-feedback">Success! You've done it.</div>
                                        <small class="form-text text-muted">Example help text that remains unchanged.</small> </div>
                                </div>
                                <div class="form-group row has-warning">
                                    <label for="inputHorizontalWarning" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input class="form-control form-control-warning" id="inputHorizontalWarning" placeholder="name@example.com" type="email">
                                        <div class="form-control-feedback">Shucks, check the formatting of that and try again.</div>
                                        <small class="form-text text-muted">Example help text that remains unchanged.</small> </div>
                                </div>
                                <div class="form-group row has-danger">
                                    <label for="inputHorizontalDnger" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input class="form-control form-control-danger" id="inputHorizontalDnger" placeholder="name@example.com" type="email">
                                        <div class="form-control-feedback">Sorry, that username's taken. Try another?</div>
                                        <small class="form-text text-muted">Example help text that remains unchanged.</small> </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="bd-example" data-example-id="">
                        <div class="form-check has-success">
                            <label class="form-check-label">
                                <input class="form-check-input" id="checkboxSuccess" value="option1" type="checkbox">
                                Checkbox with success </label>
                        </div>
                        <div class="form-check has-warning">
                            <label class="form-check-label">
                                <input class="form-check-input" id="checkboxWarning" value="option1" type="checkbox">
                                Checkbox with warning </label>
                        </div>
                        <div class="form-check has-danger">
                            <label class="form-check-label">
                                <input class="form-check-input" id="checkboxDanger" value="option1" type="checkbox">
                                Checkbox with danger </label>
                        </div>
                    </div>
                    <h2 id="custom-forms">Custom forms</h2>
                    <h3 id="checkboxes-and-radios-1">Checkboxes and radios</h3>
                    <h4 id="checkboxes">Checkboxes</h4>
                    <div class="bd-example" data-example-id="">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox">
                            <span class="custom-control-indicator"></span> <span class="custom-control-description">Check this custom checkbox</span> </label>
                    </div>
                    <div class="bd-example bd-example-indeterminate">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox">
                            <span class="custom-control-indicator"></span> <span class="custom-control-description">Check this custom checkbox</span> </label>
                    </div>
                    <h4 id="radios">Radios</h4>
                    <div class="bd-example" data-example-id="">
                        <label class="custom-control custom-radio">
                            <input id="radio1" name="radio" class="custom-control-input" type="radio">
                            <span class="custom-control-indicator"></span> <span class="custom-control-description">Toggle this custom radio</span> </label>
                        <label class="custom-control custom-radio">
                            <input id="radio2" name="radio" class="custom-control-input" type="radio">
                            <span class="custom-control-indicator"></span> <span class="custom-control-description">Or toggle this other custom radio</span> </label>
                    </div>
                    <h4 id="disabled">Disabled</h4>
                    <div class="bd-example" data-example-id="">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" disabled="" type="checkbox">
                            <span class="custom-control-indicator"></span> <span class="custom-control-description">Check this custom checkbox</span> </label>
                        <label class="custom-control custom-radio">
                            <input id="radio3" name="radioDisabled" class="custom-control-input" disabled="" type="radio">
                            <span class="custom-control-indicator"></span> <span class="custom-control-description">Toggle this custom radio</span> </label>
                    </div>
                    <h4 id="validation-states">Validation states</h4>
                    <div class="bd-example" data-example-id="">
                        <div class="form-group has-success">
                            <label class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox">
                                <span class="custom-control-indicator"></span> <span class="custom-control-description">Check this custom checkbox</span> </label>
                        </div>
                        <div class="form-group has-warning">
                            <label class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox">
                                <span class="custom-control-indicator"></span> <span class="custom-control-description">Check this custom checkbox</span> </label>
                        </div>
                        <div class="form-group has-danger mb-0">
                            <label class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox">
                                <span class="custom-control-indicator"></span> <span class="custom-control-description">Check this custom checkbox</span> </label>
                        </div>
                    </div>
                    <h4 id="stacked">Stacked</h4>
                    <div class="bd-example" data-example-id="">
                        <div class="custom-controls-stacked">
                            <label class="custom-control custom-radio">
                                <input id="radioStacked1" name="radio-stacked" class="custom-control-input" type="radio">
                                <span class="custom-control-indicator"></span> <span class="custom-control-description">Toggle this custom radio</span> </label>
                            <label class="custom-control custom-radio">
                                <input id="radioStacked2" name="radio-stacked" class="custom-control-input" type="radio">
                                <span class="custom-control-indicator"></span> <span class="custom-control-description">Or toggle this other custom radio</span> </label>
                        </div>
                    </div>
                    <h3 id="select-menu">Select menu</h3>
                    <div class="bd-example" data-example-id="">
                        <select class="custom-select">
                            <option selected="">Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <h3 id="file-browser">File browser</h3>
                    <div class="bd-example" data-example-id="">
                        <label class="custom-file">
                            <input id="file" class="custom-file-input" type="file">
                            <span class="custom-file-control"></span> </label>
                    </div>
                    <h1 class="bd-title" id="content">Input group</h1>
                    <h2 id="basic-example">Basic example</h2>
                    <div class="bd-example" data-example-id="">
                        <div class="input-group"> <span class="input-group-addon" id="basic-addon1">@</span>
                            <input class="form-control" placeholder="Username" aria-describedby="basic-addon1" type="text">
                        </div>
                        <br>
                        <div class="input-group">
                            <input class="form-control" placeholder="Recipient's username" aria-describedby="basic-addon2" type="text">
                            <span class="input-group-addon" id="basic-addon2">@example.com</span> </div>
                        <br>
                        <label for="basic-url">Your vanity URL</label>
                        <div class="input-group"> <span class="input-group-addon" id="basic-addon3">https://example.com/users/</span>
                            <input class="form-control" id="basic-url" aria-describedby="basic-addon3" type="text">
                        </div>
                        <br>
                        <div class="input-group"> <span class="input-group-addon">$</span>
                            <input class="form-control" aria-label="Amount (to the nearest dollar)" type="text">
                            <span class="input-group-addon">.00</span> </div>
                        <br>
                        <div class="input-group"> <span class="input-group-addon">$</span> <span class="input-group-addon">0.00</span>
                            <input class="form-control" aria-label="Amount (to the nearest dollar)" type="text">
                        </div>
                    </div>
                    <h2 id="sizing">Sizing</h2>
                    <div class="bd-example" data-example-id="">
                        <div class="input-group input-group-lg"> <span class="input-group-addon" id="sizing-addon1">@</span>
                            <input class="form-control" placeholder="Username" aria-describedby="sizing-addon1" type="text">
                        </div>
                        <br>
                        <div class="input-group"> <span class="input-group-addon" id="sizing-addon2">@</span>
                            <input class="form-control" placeholder="Username" aria-describedby="sizing-addon2" type="text">
                        </div>
                    </div>
                    <h2 id="checkboxes-and-radio-addons">Checkboxes and radio addons</h2>
                    <div class="bd-example" data-example-id="">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="input-group"> <span class="input-group-addon">
                                    <input aria-label="Checkbox for following text input" type="checkbox">
                                    </span>
                                    <input class="form-control" aria-label="Text input with checkbox" type="text">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-group"> <span class="input-group-addon">
                                    <input aria-label="Radio button for following text input" type="radio">
                                    </span>
                                    <input class="form-control" aria-label="Text input with radio button" type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                    <h2 id="multiple-addons">Multiple addons</h2>
                    <div class="bd-example" data-example-id="">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="input-group"> <span class="input-group-addon">
                                    <input aria-label="Checkbox for following text input" type="checkbox">
                                    </span> <span class="input-group-addon">$</span>
                                    <input class="form-control" aria-label="Text input with checkbox" type="text">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-group"> <span class="input-group-addon">$</span> <span class="input-group-addon">0.00</span>
                                    <input class="form-control" aria-label="Text input with radio button" type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                    <h2 id="button-addons">Button addons</h2>
                    <div class="bd-example" data-example-id="">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="input-group"> <span class="input-group-btn">
                                    <button class="btn btn-secondary" type="button">Go!</button>
                                    </span>
                                    <input class="form-control" placeholder="Search for..." type="text">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-group">
                                    <input class="form-control" placeholder="Search for..." type="text">
                                    <span class="input-group-btn">
                                    <button class="btn btn-secondary" type="button">Go!</button>
                                    </span> </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-offset-3 col-lg-6">
                                <div class="input-group"> <span class="input-group-btn">
                                    <button class="btn btn-secondary" type="button">Hate it</button>
                                    </span>
                                    <input class="form-control" placeholder="Product name" type="text">
                                    <span class="input-group-btn">
                                    <button class="btn btn-secondary" type="button">Love it</button>
                                    </span> </div>
                            </div>
                        </div>
                    </div>
                    <h2 id="buttons-with-dropdowns">Buttons with dropdowns</h2>
                    <div class="bd-example" data-example-id="">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="input-group">
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Action </button>
                                        <div class="dropdown-menu"> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                                            <div role="separator" class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a> </div>
                                    </div>
                                    <input class="form-control" aria-label="Text input with dropdown button" type="text">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-group">
                                    <input class="form-control" aria-label="Text input with dropdown button" type="text">
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Action </button>
                                        <div class="dropdown-menu dropdown-menu-right"> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                                            <div role="separator" class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h2 id="segmented-buttons">Segmented buttons</h2>
                    <div class="bd-example" data-example-id="">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="input-group">
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-secondary">Action</button>
                                        <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Toggle Dropdown</span> </button>
                                        <div class="dropdown-menu"> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                                            <div role="separator" class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a> </div>
                                    </div>
                                    <input class="form-control" aria-label="Text input with segmented button dropdown" type="text">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-group">
                                    <input class="form-control" aria-label="Text input with segmented button dropdown" type="text">
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-secondary">Action</button>
                                        <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Toggle Dropdown</span> </button>
                                        <div class="dropdown-menu dropdown-menu-right"> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                                            <div role="separator" class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h1 class="bd-title" id="content">Jumbotron</h1>
                    <h2 id="example">Example</h2>
                    <div class="bd-example" data-example-id="">
                        <div class="jumbotron">
                            <h1 class="display-3">Hello, world!</h1>
                            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                            <hr class="my-4">
                            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                            <p class="lead"> <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a> </p>
                        </div>
                    </div>
                    <div class="bd-example" data-example-id="">
                        <div class="jumbotron jumbotron-fluid">
                            <div class="container">
                                <h1 class="display-3">Fluid jumbotron</h1>
                                <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
                            </div>
                        </div>
                    </div>
                    <h1 class="bd-title" id="content">List group</h1>
                    <h2 id="basic-example">Basic example</h2>
                    <div class="bd-example" data-example-id="">
                        <ul class="list-group">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Morbi leo risus</li>
                            <li class="list-group-item">Porta ac consectetur ac</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                    </div>
                    <h2 id="active-items">Active items</h2>
                    <div class="bd-example" data-example-id="">
                        <ul class="list-group">
                            <li class="list-group-item active">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Morbi leo risus</li>
                            <li class="list-group-item">Porta ac consectetur ac</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                    </div>
                    <h2 id="disabled-items">Disabled items</h2>
                    <div class="bd-example" data-example-id="">
                        <ul class="list-group">
                            <li class="list-group-item disabled">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Morbi leo risus</li>
                            <li class="list-group-item">Porta ac consectetur ac</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                    </div>
                    <h2 id="links-and-buttons">Links and buttons</h2>
                    <div class="bd-example" data-example-id="">
                        <div class="list-group"> <a href="#" class="list-group-item active"> Cras justo odio </a> <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a> <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a> <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a> <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a> </div>
                    </div>
                    <div class="bd-example" data-example-id="">
                        <div class="list-group">
                            <button type="button" class="list-group-item list-group-item-action active"> Cras justo odio </button>
                            <button type="button" class="list-group-item list-group-item-action">Dapibus ac facilisis in</button>
                            <button type="button" class="list-group-item list-group-item-action">Morbi leo risus</button>
                            <button type="button" class="list-group-item list-group-item-action">Porta ac consectetur ac</button>
                            <button type="button" class="list-group-item list-group-item-action" disabled="">Vestibulum at eros</button>
                        </div>
                    </div>
                    <h2 id="contextual-classes">Contextual classes</h2>
                    <div class="bd-example" data-example-id="">
                        <ul class="list-group">
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item list-group-item-success">Dapibus ac facilisis in</li>
                            <li class="list-group-item list-group-item-info">Cras sit amet nibh libero</li>
                            <li class="list-group-item list-group-item-warning">Porta ac consectetur ac</li>
                            <li class="list-group-item list-group-item-danger">Vestibulum at eros</li>
                        </ul>
                    </div>
                    <div class="bd-example" data-example-id="">
                        <div class="list-group"> <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a> <a href="#" class="list-group-item list-group-item-action list-group-item-success">Dapibus ac facilisis in</a> <a href="#" class="list-group-item list-group-item-action list-group-item-info">Cras sit amet nibh libero</a> <a href="#" class="list-group-item list-group-item-action list-group-item-warning">Porta ac consectetur ac</a> <a href="#" class="list-group-item list-group-item-action list-group-item-danger">Vestibulum at eros</a> </div>
                    </div>
                    <h2 id="with-badges">With badges</h2>
                    <div class="bd-example" data-example-id="">
                        <ul class="list-group">
                            <li class="list-group-item justify-content-between"> Cras justo odio <span class="badge badge-default badge-pill">14</span> </li>
                            <li class="list-group-item justify-content-between"> Dapibus ac facilisis in <span class="badge badge-default badge-pill">2</span> </li>
                            <li class="list-group-item justify-content-between"> Morbi leo risus <span class="badge badge-default badge-pill">1</span> </li>
                        </ul>
                    </div>
                    <h2 id="custom-content">Custom content</h2>
                    <div class="bd-example" data-example-id="">
                        <div class="list-group"> <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">List group item heading</h5>
                                <small>3 days ago</small> </div>
                            <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                            <small>Donec id elit non mi porta.</small> </a> <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">List group item heading</h5>
                                <small class="text-muted">3 days ago</small> </div>
                            <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                            <small class="text-muted">Donec id elit non mi porta.</small> </a> <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">List group item heading</h5>
                                <small class="text-muted">3 days ago</small> </div>
                            <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                            <small class="text-muted">Donec id elit non mi porta.</small> </a> </div>
                    </div>
                    <h1 class="bd-title" id="content">Modal</h1>
                    <h2 id="examples">Examples</h2>
                    <h3 id="modal-components">Modal components</h3>
                    <div class="bd-example bd-example-modal">
                        <div class="modal">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Modal body text goes here.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 id="live-demo">Live demo</h3>
                    <div id="exampleModalLive" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLiveLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                                </div>
                                <div class="modal-body">
                                    <p>Woohoo, you're reading this text in a modal!</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bd-example">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLive"> Launch demo modal </button>
                    </div>
                    <h3 id="scrolling-long-content">Scrolling long content</h3>
                    <div id="exampleModalLong" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                                </div>
                                <div class="modal-body">
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bd-example">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong"> Launch demo modal </button>
                    </div>
                    <h3 id="tooltips-and-popovers">Tooltips and popovers</h3>
                    <div id="exampleModalPopovers" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalPopoversLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalPopoversLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                                </div>
                                <div class="modal-body">
                                    <h5>Popover in a modal</h5>
                                    <p>This <a href="#" role="button" class="btn btn-secondary popover-test" title="" data-content="Popover body content is set in this attribute." data-original-title="Popover title">button</a> triggers a popover on click.</p>
                                    <hr>
                                    <h5>Tooltips in a modal</h5>
                                    <p><a href="#" class="tooltip-test" title="" data-original-title="Tooltip">This link</a> and <a href="#" class="tooltip-test" title="" data-original-title="Tooltip">that link</a> have tooltips on hover.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bd-example">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalPopovers"> Launch demo modal </button>
                    </div>
                    <h3 id="using-the-grid">Using the grid</h3>
                    <div id="gridSystemModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="gridModalLabel">Grids in modals</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container-fluid bd-example-row">
                                        <div class="row">
                                            <div class="col-md-4">.col-md-4</div>
                                            <div class="col-md-4 col-md-offset-4">.col-md-4 .col-md-offset-4</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 col-md-offset-3">.col-md-3 .col-md-offset-3</div>
                                            <div class="col-md-2 col-md-offset-4">.col-md-2 .col-md-offset-4</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-md-offset-3">.col-md-6 .col-md-offset-3</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-9"> Level 1: .col-sm-9
                                                <div class="row">
                                                    <div class="col-8 col-sm-6"> Level 2: .col-8 .col-sm-6 </div>
                                                    <div class="col-4 col-sm-6"> Level 2: .col-4 .col-sm-6 </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bd-example">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#gridSystemModal"> Launch demo modal </button>
                    </div>
                    <h3 id="varying-modal-content">Varying modal content</h3>
                    <div class="bd-example" data-example-id="">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Open modal for @fat</button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Open modal for @getbootstrap</button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group">
                                                <label for="recipient-name" class="form-control-label">Recipient:</label>
                                                <input class="form-control" id="recipient-name" type="text">
                                            </div>
                                            <div class="form-group">
                                                <label for="message-text" class="form-control-label">Message:</label>
                                                <textarea class="form-control" id="message-text"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Send message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h2 id="optional-sizes">Optional sizes</h2>
                    <div class="bd-example">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">Small modal</button>
                    </div>
                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                                </div>
                                <div class="modal-body"> ... </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="mySmallModalLabel">Small modal</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                                </div>
                                <div class="modal-body"> ... </div>
                            </div>
                        </div>
                    </div>
                    <h1 class="bd-title" id="content">Navs</h1>
                    <h2 id="base-nav">Base nav</h2>
                    <div class="bd-example" data-example-id="">
                        <ul class="nav">
                            <li class="nav-item"> <a class="nav-link active" href="#">Active</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="#">Link</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="#">Link</a> </li>
                            <li class="nav-item"> <a class="nav-link disabled" href="#">Disabled</a> </li>
                        </ul>
                    </div>
                    <div class="bd-example" data-example-id="">
                        <nav class="nav"> <a class="nav-link active" href="#">Active</a> <a class="nav-link" href="#">Link</a> <a class="nav-link" href="#">Link</a> <a class="nav-link disabled" href="#">Disabled</a> </nav>
                    </div>
                    <h2 id="available-styles">Available styles</h2>
                    <h3 id="horizontal-alignment">Horizontal alignment</h3>
                    <div class="bd-example" data-example-id="">
                        <ul class="nav justify-content-center">
                            <li class="nav-item"> <a class="nav-link active" href="#">Active</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="#">Link</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="#">Link</a> </li>
                            <li class="nav-item"> <a class="nav-link disabled" href="#">Disabled</a> </li>
                        </ul>
                    </div>
                    <div class="bd-example" data-example-id="">
                        <ul class="nav justify-content-end">
                            <li class="nav-item"> <a class="nav-link active" href="#">Active</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="#">Link</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="#">Link</a> </li>
                            <li class="nav-item"> <a class="nav-link disabled" href="#">Disabled</a> </li>
                        </ul>
                    </div>
                    <h3 id="vertical">Vertical</h3>
                    <div class="bd-example" data-example-id="">
                        <ul class="nav flex-column">
                            <li class="nav-item"> <a class="nav-link active" href="#">Active</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="#">Link</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="#">Link</a> </li>
                            <li class="nav-item"> <a class="nav-link disabled" href="#">Disabled</a> </li>
                        </ul>
                    </div>
                    <div class="bd-example" data-example-id="">
                        <nav class="nav flex-column"> <a class="nav-link active" href="#">Active</a> <a class="nav-link" href="#">Link</a> <a class="nav-link" href="#">Link</a> <a class="nav-link disabled" href="#">Disabled</a> </nav>
                    </div>
                    <h3 id="tabs">Tabs</h3>
                    <div class="bd-example" data-example-id="">
                        <ul class="nav nav-tabs">
                            <li class="nav-item"> <a class="nav-link active" href="#">Active</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="#">Link</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="#">Link</a> </li>
                            <li class="nav-item"> <a class="nav-link disabled" href="#">Disabled</a> </li>
                        </ul>
                    </div>
                    <h3 id="pills">Pills</h3>
                    <div class="bd-example" data-example-id="">
                        <ul class="nav nav-pills">
                            <li class="nav-item"> <a class="nav-link active" href="#">Active</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="#">Link</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="#">Link</a> </li>
                            <li class="nav-item"> <a class="nav-link disabled" href="#">Disabled</a> </li>
                        </ul>
                    </div>
                    <h3 id="fill-and-justify">Fill and justify</h3>
                    <div class="bd-example" data-example-id="">
                        <ul class="nav nav-pills nav-fill">
                            <li class="nav-item"> <a class="nav-link active" href="#">Active</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="#">Longer nav link</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="#">Link</a> </li>
                            <li class="nav-item"> <a class="nav-link disabled" href="#">Disabled</a> </li>
                        </ul>
                    </div>
                    <div class="bd-example" data-example-id="">
                        <ul class="nav nav-pills nav-justified">
                            <li class="nav-item"> <a class="nav-link active" href="#">Active</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="#">Longer nav link</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="#">Link</a> </li>
                            <li class="nav-item"> <a class="nav-link disabled" href="#">Disabled</a> </li>
                        </ul>
                    </div>
                    <h2 id="working-with-flex-utilities">Working with flex utilities</h2>
                    <div class="bd-example" data-example-id="">
                        <nav class="nav nav-pills flex-column flex-sm-row"> <a class="flex-sm-fill text-sm-center nav-link active" href="#">Active</a> <a class="flex-sm-fill text-sm-center nav-link" href="#">Link</a> <a class="flex-sm-fill text-sm-center nav-link" href="#">Link</a> <a class="flex-sm-fill text-sm-center nav-link disabled" href="#">Disabled</a> </nav>
                    </div>
                    <h2 id="using-dropdowns">Using dropdowns</h2>
                    <h3 id="tabs-with-dropdowns">Tabs with dropdowns</h3>
                    <div class="bd-example" data-example-id="">
                        <ul class="nav nav-tabs">
                            <li class="nav-item"> <a class="nav-link active" href="#">Active</a> </li>
                            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                <div class="dropdown-menu"> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a> </div>
                            </li>
                            <li class="nav-item"> <a class="nav-link" href="#">Link</a> </li>
                            <li class="nav-item"> <a class="nav-link disabled" href="#">Disabled</a> </li>
                        </ul>
                    </div>
                    <h3 id="pills-with-dropdowns">Pills with dropdowns</h3>
                    <div class="bd-example" data-example-id="">
                        <ul class="nav nav-pills">
                            <li class="nav-item"> <a class="nav-link active" href="#">Active</a> </li>
                            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                <div class="dropdown-menu"> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a> </div>
                            </li>
                            <li class="nav-item"> <a class="nav-link" href="#">Link</a> </li>
                            <li class="nav-item"> <a class="nav-link disabled" href="#">Disabled</a> </li>
                        </ul>
                    </div>
                    <h2 id="javascript-behavior">JavaScript behavior</h2>
                    <div class="bd-example bd-example-tabs" role="tabpanel">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item"> <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-expanded="true">Home</a> </li>
                            <li class="nav-item"> <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile">Profile</a> </li>
                            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Dropdown </a>
                                <div class="dropdown-menu"> <a class="dropdown-item" id="dropdown1-tab" href="#dropdown1" role="tab" data-toggle="tab" aria-controls="dropdown1">@fat</a> <a class="dropdown-item" id="dropdown2-tab" href="#dropdown2" role="tab" data-toggle="tab" aria-controls="dropdown2">@mdo</a> </div>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div role="tabpanel" class="tab-pane fade show active" id="home" aria-labelledby="home-tab">
                                <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
                            </div>
                            <div class="tab-pane fade" id="dropdown1" role="tabpanel" aria-labelledby="dropdown1-tab">
                                <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
                            </div>
                            <div class="tab-pane fade" id="dropdown2" role="tabpanel" aria-labelledby="dropdown2-tab">
                                <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
                            </div>
                        </div>
                    </div>
                    <h1 class="bd-title" id="content">Navbar</h1>
                    <h2 id="supported-content">Supported content</h2>
                    <div class="bd-example" data-example-id="">
                        <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
                            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                            <a class="navbar-brand" href="#">Navbar</a>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active"> <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> </li>
                                    <li class="nav-item"> <a class="nav-link" href="#">Link</a> </li>
                                    <li class="nav-item"> <a class="nav-link disabled" href="#">Disabled</a> </li>
                                </ul>
                                <form class="form-inline my-2 my-lg-0">
                                    <input class="form-control mr-sm-2" placeholder="Search" type="text">
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                </form>
                            </div>
                        </nav>
                    </div>
                    <h3 id="brand">Brand</h3>
                    <div class="bd-example" data-example-id="">
                        <!-- As a link -->
                        <nav class="navbar navbar-light bg-faded"> <a class="navbar-brand" href="#">Navbar</a> </nav>
                
                        <!-- As a heading -->
                        <nav class="navbar navbar-light bg-faded">
                            <h1 class="navbar-brand mb-0">Navbar</h1>
                        </nav>
                    </div>
                    <div class="bd-example" data-example-id="">
                        <!-- Image and text -->
                        <nav class="navbar navbar-light bg-faded"> <a class="navbar-brand" href="#"> <img src="{{ url('/images/icon.svg') }}" class="d-inline-block align-top" alt="" width="30" height="30"> Bootstrap </a> </nav>
                    </div>
                    <h3 id="nav">Nav</h3>
                    <div class="bd-example" data-example-id="">
                        <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
                            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                            <a class="navbar-brand" href="#">Navbar</a>
                            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                <div class="navbar-nav"> <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a> <a class="nav-item nav-link" href="#">Features</a> <a class="nav-item nav-link" href="#">Pricing</a> <a class="nav-item nav-link disabled" href="#">Disabled</a> </div>
                            </div>
                        </nav>
                    </div>
                    <div class="bd-example" data-example-id="">
                        <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
                            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                            <a class="navbar-brand" href="#">Navbar</a>
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                <ul class="navbar-nav">
                                    <li class="nav-item active"> <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> </li>
                                    <li class="nav-item"> <a class="nav-link" href="#">Features</a> </li>
                                    <li class="nav-item"> <a class="nav-link" href="#">Pricing</a> </li>
                                    <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Dropdown link </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a> </div>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <h3 id="forms">Forms</h3>
                    <div class="bd-example" data-example-id="">
                        <nav class="navbar navbar-light bg-faded">
                            <form class="form-inline">
                                <input class="form-control mr-sm-2" placeholder="Search" type="text">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                            </form>
                        </nav>
                    </div>
                    <div class="bd-example" data-example-id="">
                        <nav class="navbar navbar-light bg-faded justify-content-between"> <a class="navbar-brand">Navbar</a>
                            <form class="form-inline">
                                <input class="form-control mr-sm-2" placeholder="Search" type="text">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                            </form>
                        </nav>
                    </div>
                    <div class="bd-example" data-example-id="">
                        <nav class="navbar navbar-light bg-faded">
                            <form class="form-inline">
                                <div class="input-group"> <span class="input-group-addon" id="basic-addon1">@</span>
                                    <input class="form-control" placeholder="Username" aria-describedby="basic-addon1" type="text">
                                </div>
                            </form>
                        </nav>
                    </div>
                    <div class="bd-example" data-example-id="">
                        <nav class="navbar navbar-light bg-faded">
                            <form class="form-inline">
                                <button class="btn btn-outline-success" type="button">Main button</button>
                                <button class="btn btn-sm align-middle btn-outline-secondary" type="button">Smaller button</button>
                            </form>
                        </nav>
                    </div>
                    <h3 id="text">Text</h3>
                    <div class="bd-example" data-example-id="">
                        <nav class="navbar navbar-light bg-faded"> <span class="navbar-text"> Navbar text with an inline element </span> </nav>
                    </div>
                    <div class="bd-example" data-example-id="">
                        <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
                            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                            <a class="navbar-brand" href="#">Navbar w/ text</a>
                            <div class="collapse navbar-collapse" id="navbarText">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active"> <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> </li>
                                    <li class="nav-item"> <a class="nav-link" href="#">Features</a> </li>
                                    <li class="nav-item"> <a class="nav-link" href="#">Pricing</a> </li>
                                </ul>
                                <span class="navbar-text"> Navbar text with an inline element </span> </div>
                        </nav>
                    </div>
                    <h2 id="color-schemes">Color schemes</h2>
                    <div class="bd-example">
                        <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
                            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                            <a class="navbar-brand" href="#">Navbar</a>
                            <div class="collapse navbar-collapse" id="navbarColor01">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active"> <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> </li>
                                    <li class="nav-item"> <a class="nav-link" href="#">Features</a> </li>
                                    <li class="nav-item"> <a class="nav-link" href="#">Pricing</a> </li>
                                    <li class="nav-item"> <a class="nav-link" href="#">About</a> </li>
                                </ul>
                                <form class="form-inline">
                                    <input class="form-control mr-sm-2" placeholder="Search" type="text">
                                    <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
                                </form>
                            </div>
                        </nav>
                        <nav class="navbar navbar-toggleable-md navbar-inverse bg-primary">
                            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                            <a class="navbar-brand" href="#">Navbar</a>
                            <div class="collapse navbar-collapse" id="navbarColor02">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active"> <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> </li>
                                    <li class="nav-item"> <a class="nav-link" href="#">Features</a> </li>
                                    <li class="nav-item"> <a class="nav-link" href="#">Pricing</a> </li>
                                    <li class="nav-item"> <a class="nav-link" href="#">About</a> </li>
                                </ul>
                                <form class="form-inline">
                                    <input class="form-control mr-sm-2" placeholder="Search" type="text">
                                    <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
                                </form>
                            </div>
                        </nav>
                        <nav class="navbar navbar-toggleable-md navbar-light" style="background-color: #e3f2fd;">
                            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                            <a class="navbar-brand" href="#">Navbar</a>
                            <div class="collapse navbar-collapse" id="navbarColor03">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active"> <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> </li>
                                    <li class="nav-item"> <a class="nav-link" href="#">Features</a> </li>
                                    <li class="nav-item"> <a class="nav-link" href="#">Pricing</a> </li>
                                    <li class="nav-item"> <a class="nav-link" href="#">About</a> </li>
                                </ul>
                                <form class="form-inline">
                                    <input class="form-control mr-sm-2" placeholder="Search" type="text">
                                    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                                </form>
                            </div>
                        </nav>
                    </div>
                    <h2 id="containers">Containers</h2>
                    <div class="bd-example" data-example-id="">
                        <div class="container">
                            <nav class="navbar navbar-toggleable-md navbar-light bg-faded"> <a class="navbar-brand" href="#">Navbar</a> </nav>
                        </div>
                    </div>
                    <div class="bd-example" data-example-id="">
                        <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
                            <div class="container"> <a class="navbar-brand" href="#">Navbar</a> </div>
                        </nav>
                    </div>
                    <h2 id="placement">Placement</h2>
                    <div class="bd-example" data-example-id="">
                        <nav class="navbar navbar-light bg-faded"> <a class="navbar-brand" href="#">Full width</a> </nav>
                    </div>
                    <div class="bd-example" data-example-id="">
                        <nav class="navbar fixed-top navbar-light bg-faded"> <a class="navbar-brand" href="#">Fixed top</a> </nav>
                    </div>
                    <div class="bd-example" data-example-id="">
                        <nav class="navbar fixed-bottom navbar-light bg-faded"> <a class="navbar-brand" href="#">Fixed bottom</a> </nav>
                    </div>
                    <div class="bd-example" data-example-id="">
                        <nav class="navbar sticky-top navbar-light bg-faded"> <a class="navbar-brand" href="#">Sticky top</a> </nav>
                    </div>
                    <h2 id="responsive-behaviors">Responsive behaviors</h2>
                    <h3 id="toggler">Toggler</h3>
                    <div class="bd-example" data-example-id="">
                        <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                            <div class="collapse navbar-collapse" id="navbarTogglerDemo01"> <a class="navbar-brand" href="#">Hidden brand</a>
                                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                    <li class="nav-item active"> <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> </li>
                                    <li class="nav-item"> <a class="nav-link" href="#">Link</a> </li>
                                    <li class="nav-item"> <a class="nav-link disabled" href="#">Disabled</a> </li>
                                </ul>
                                <form class="form-inline my-2 my-lg-0">
                                    <input class="form-control mr-sm-2" placeholder="Search" type="text">
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                </form>
                            </div>
                        </nav>
                    </div>
                    <div class="bd-example" data-example-id="">
                        <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
                            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                            <a class="navbar-brand" href="#">Navbar</a>
                            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                                <ul class="navbar-nav mr-auto mt-2 mt-md-0">
                                    <li class="nav-item active"> <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> </li>
                                    <li class="nav-item"> <a class="nav-link" href="#">Link</a> </li>
                                    <li class="nav-item"> <a class="nav-link disabled" href="#">Disabled</a> </li>
                                </ul>
                                <form class="form-inline my-2 my-lg-0">
                                    <input class="form-control mr-sm-2" placeholder="Search" type="text">
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                </form>
                            </div>
                        </nav>
                    </div>
                    <h3 id="external-content">External content</h3>
                    <div class="bd-example" data-example-id="">
                        <div class="pos-f-t">
                            <div class="collapse" id="navbarToggleExternalContent">
                                <div class="bg-inverse p-4">
                                    <h4 class="text-white">Collapsed content</h4>
                                    <span class="text-muted">Toggleable via the navbar brand.</span> </div>
                            </div>
                            <nav class="navbar navbar-inverse bg-inverse">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                            </nav>
                        </div>
                    </div>
                    <h1 class="bd-title" id="content">Pagination</h1>
                    <h2 id="overview">Overview</h2>
                    <div class="bd-example" data-example-id="">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                    <h2 id="working-with-icons">Working with icons</h2>
                    <div class="bd-example" data-example-id="">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"> <a class="page-link" href="#" aria-label="Previous"> <span aria-hidden="true">«</span> <span class="sr-only">Previous</span> </a> </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"> <a class="page-link" href="#" aria-label="Next"> <span aria-hidden="true">»</span> <span class="sr-only">Next</span> </a> </li>
                            </ul>
                        </nav>
                    </div>
                    <h2 id="disabled-and-active-states">Disabled and active states</h2>
                    <div class="bd-example" data-example-id="">
                        <nav aria-label="...">
                            <ul class="pagination">
                                <li class="page-item disabled"> <a class="page-link" href="#" tabindex="-1">Previous</a> </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active"> <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a> </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"> <a class="page-link" href="#">Next</a> </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="bd-example" data-example-id="">
                        <nav aria-label="...">
                            <ul class="pagination">
                                <li class="page-item disabled"> <span class="page-link">Previous</span> </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active"> <span class="page-link"> 2 <span class="sr-only">(current)</span> </span> </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"> <a class="page-link" href="#">Next</a> </li>
                            </ul>
                        </nav>
                    </div>
                    <h2 id="sizing">Sizing</h2>
                    <div class="bd-example" data-example-id="">
                        <nav aria-label="...">
                            <ul class="pagination pagination-lg">
                                <li class="page-item disabled"> <a class="page-link" href="#" tabindex="-1">Previous</a> </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"> <a class="page-link" href="#">Next</a> </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="bd-example" data-example-id="">
                        <nav aria-label="...">
                            <ul class="pagination pagination-sm">
                                <li class="page-item disabled"> <a class="page-link" href="#" tabindex="-1">Previous</a> </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"> <a class="page-link" href="#">Next</a> </li>
                            </ul>
                        </nav>
                    </div>
                    <h2 id="alignment">Alignment</h2>
                    <div class="bd-example" data-example-id="">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled"> <a class="page-link" href="#" tabindex="-1">Previous</a> </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"> <a class="page-link" href="#">Next</a> </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="bd-example" data-example-id="">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-end">
                                <li class="page-item disabled"> <a class="page-link" href="#" tabindex="-1">Previous</a> </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"> <a class="page-link" href="#">Next</a> </li>
                            </ul>
                        </nav>
                    </div>
                    <h1 class="bd-title" id="content">Popovers</h1>
                    <h2 id="static-popover">Static popover</h2>
                    <div class="bd-example bd-example-popover-static">
                        <div class="popover popover-top">
                            <h3 class="popover-title">Popover top</h3>
                            <div class="popover-content">
                                <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                            </div>
                        </div>
                        <div class="popover popover-right">
                            <h3 class="popover-title">Popover right</h3>
                            <div class="popover-content">
                                <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                            </div>
                        </div>
                        <div class="popover popover-bottom">
                            <h3 class="popover-title">Popover bottom</h3>
                            <div class="popover-content">
                                <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                            </div>
                        </div>
                        <div class="popover popover-left">
                            <h3 class="popover-title">Popover left</h3>
                            <div class="popover-content">
                                <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <h2 id="live-demo">Live demo</h2>
                    <div class="bd-example" data-example-id="">
                        <button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="Popover title">Click to toggle popover</button>
                    </div>
                    <h3 id="four-directions">Four directions</h3>
                    <div class="bd-example popover-demo">
                        <div class="bd-example-popovers">
                            <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title=""> Popover on top </button>
                            <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title=""> Popover on right </button>
                            <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title=""> Popover on bottom </button>
                            <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title=""> Popover on left </button>
                        </div>
                    </div>
                    <h3 id="dismiss-on-next-click">Dismiss on next click</h3>
                    <div class="bd-example" data-example-id=""> <a tabindex="0" class="btn btn-lg btn-danger" role="button" data-toggle="popover" data-trigger="focus" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="Dismissible popover">Dismissible popover</a> </div>
                    <h1 class="bd-title" id="content">Progress</h1>
                    <h2 id="customizing">Customizing</h2>
                    <h3 id="labels">Labels</h3>
                    <div class="bd-example" data-example-id="">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                        </div>
                    </div>
                    <h3 id="height">Height</h3>
                    <div class="bd-example" data-example-id="">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 25%; height: 1px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 25%; height: 20px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <h3 id="backgrounds">Backgrounds</h3>
                    <div class="bd-example" data-example-id="">
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <h3 id="multiple-bars">Multiple bars</h3>
                    <div class="bd-example" data-example-id="">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <h3 id="striped">Striped</h3>
                    <div class="bd-example" data-example-id="">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <h3 id="animated-stripes">Animated stripes</h3>
                    <div class="bd-example">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                        </div>
                        <button type="button" class="btn btn-secondary bd-toggle-animated-progress" data-toggle="button" aria-pressed="false" autocomplete="off"> Toggle animation </button>
                    </div>
                    <h1 class="bd-title" id="content">Scrollspy</h1>
                    <h2 id="example-in-navbar">Example in navbar</h2>
                    <div class="bd-example">
                        <nav id="navbar-example2" class="navbar navbar-light bg-faded"> <a class="navbar-brand" href="#">Navbar</a>
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#fat">@fat</a></li>
                                <li class="nav-item"><a class="nav-link" href="#mdo">@mdo</a></li>
                                <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                    <div class="dropdown-menu"> <a class="dropdown-item" href="#one">one</a> <a class="dropdown-item" href="#two">two</a>
                                        <div role="separator" class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#three">three</a> </div>
                                </li>
                            </ul>
                        </nav>
                        <div data-spy="scroll" data-target="#navbar-example2" data-offset="0" class="scrollspy-example">
                            <h4 id="fat" style="">@fat</h4>
                            <p>Ad leggings keytar, brunch id art party dolor labore. Pitchfork yr enim lo-fi before they sold out qui. Tumblr farm-to-table bicycle rights whatever. Anim keffiyeh carles cardigan. Velit seitan mcsweeney's photo booth 3 wolf moon irure. Cosby sweater lomo jean shorts, williamsburg hoodie minim qui you probably haven't heard of them et cardigan trust fund culpa biodiesel wes anderson aesthetic. Nihil tattooed accusamus, cred irony biodiesel keffiyeh artisan ullamco consequat.</p>
                            <h4 id="mdo" style="">@mdo</h4>
                            <p>Veniam marfa mustache skateboard, adipisicing fugiat velit pitchfork beard. Freegan beard aliqua cupidatat mcsweeney's vero. Cupidatat four loko nisi, ea helvetica nulla carles. Tattooed cosby sweater food truck, mcsweeney's quis non freegan vinyl. Lo-fi wes anderson +1 sartorial. Carles non aesthetic exercitation quis gentrify. Brooklyn adipisicing craft beer vice keytar deserunt.</p>
                            <h4 id="one" style="">one</h4>
                            <p>Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ea sunt next level locavore single-origin coffee in magna veniam. High life id vinyl, echo park consequat quis aliquip banh mi pitchfork. Vero VHS est adipisicing. Consectetur nisi DIY minim messenger bag. Cred ex in, sustainable delectus consectetur fanny pack iphone.</p>
                            <h4 id="two" style="">two</h4>
                            <p>In incididunt echo park, officia deserunt mcsweeney's proident master cleanse thundercats sapiente veniam. Excepteur VHS elit, proident shoreditch +1 biodiesel laborum craft beer. Single-origin coffee wayfarers irure four loko, cupidatat terry richardson master cleanse. Assumenda you probably haven't heard of them art party fanny pack, tattooed nulla cardigan tempor ad. Proident wolf nesciunt sartorial keffiyeh eu banh mi sustainable. Elit wolf voluptate, lo-fi ea portland before they sold out four loko. Locavore enim nostrud mlkshk brooklyn nesciunt.</p>
                            <h4 id="three" style="">three</h4>
                            <p>Ad leggings keytar, brunch id art party dolor labore. Pitchfork yr enim lo-fi before they sold out qui. Tumblr farm-to-table bicycle rights whatever. Anim keffiyeh carles cardigan. Velit seitan mcsweeney's photo booth 3 wolf moon irure. Cosby sweater lomo jean shorts, williamsburg hoodie minim qui you probably haven't heard of them et cardigan trust fund culpa biodiesel wes anderson aesthetic. Nihil tattooed accusamus, cred irony biodiesel keffiyeh artisan ullamco consequat.</p>
                            <p>Keytar twee blog, culpa messenger bag marfa whatever delectus food truck. Sapiente synth id assumenda. Locavore sed helvetica cliche irony, thundercats you probably haven't heard of them consequat hoodie gluten-free lo-fi fap aliquip. Labore elit placeat before they sold out, terry richardson proident brunch nesciunt quis cosby sweater pariatur keffiyeh ut helvetica artisan. Cardigan craft beer seitan readymade velit. VHS chambray laboris tempor veniam. Anim mollit minim commodo ullamco thundercats. </p>
                        </div>
                    </div>
                    <h1 class="bd-title" id="content">Tooltips</h1>
                    <h2 id="example-enable-tooltips-everywhere">Example: Enable tooltips everywhere</h2>
                    <h2 id="examples">Examples</h2>
                    <div class="bd-example tooltip-demo">
                        <p class="muted">Tight pants next level keffiyeh <a href="#" data-toggle="tooltip" title="Default tooltip">you probably</a> haven't heard of them. Photo booth beard raw denim letterpress vegan messenger bag stumptown. Farm-to-table seitan, mcsweeney's fixie sustainable quinoa 8-bit american apparel <a href="#" data-toggle="tooltip" title="Another tooltip">have a</a> terry richardson vinyl chambray. Beard stumptown, cardigans banh mi lomo thundercats. Tofu biodiesel williamsburg marfa, four loko mcsweeney's cleanse vegan chambray. A really ironic artisan <a href="#" data-toggle="tooltip" title="Another one here too">whatever keytar</a>, scenester farm-to-table banksy Austin <a href="#" data-toggle="tooltip" title="The last tip!">twitter handle</a> freegan cred raw denim single-origin coffee viral. </p>
                    </div>
                    <h3 id="static-demo">Static demo</h3>
                    <div class="bd-example bd-example-tooltip-static">
                        <div class="tooltip tooltip-top" role="tooltip">
                            <div class="tooltip-inner"> Tooltip on the top </div>
                        </div>
                        <div class="tooltip tooltip-right" role="tooltip">
                            <div class="tooltip-inner"> Tooltip on the right </div>
                        </div>
                        <div class="tooltip tooltip-bottom" role="tooltip">
                            <div class="tooltip-inner"> Tooltip on the bottom </div>
                        </div>
                        <div class="tooltip tooltip-left" role="tooltip">
                            <div class="tooltip-inner"> Tooltip on the left </div>
                        </div>
                    </div>
                    <h3 id="interactive-demo">Interactive demo</h3>
                    <div class="bd-example tooltip-demo">
                        <div class="bd-example-tooltips">
                            <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Tooltip on top"> Tooltip on top </button>
                            <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Tooltip on right"> Tooltip on right </button>
                            <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom"> Tooltip on bottom </button>
                            <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="left" title="Tooltip on left"> Tooltip on left </button>
                            <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-html="true" title="<em>Tooltip</em> <u>with</u> <b>HTML</b>"> Tooltip with HTML </button>
                        </div>
                    </div>
                    <h1 class="display-4">Utilities</h1>
                    <h1 class="bd-title" id="content">Borders</h1>
                    <h2 id="border">Border</h2>
                    <div class="bd-example-border-utils">
                        <div class="bd-example" data-example-id=""> <span class="border-0"></span> <span class="border-top-0"></span> <span class="border-right-0"></span> <span class="border-bottom-0"></span> <span class="border-left-0"></span> </div>
                    </div>
                    <h2 id="border-radius">Border-radius</h2>
                    <div class="bd-example bd-example-images"> <img data-src="holder.js/75x75" class="rounded" alt="75x75" style="width: 75px; height: 75px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2275%22%20height%3D%2275%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2075%2075%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15a8b4d811d%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15a8b4d811d%22%3E%3Crect%20width%3D%2275%22%20height%3D%2275%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2218.5%22%20y%3D%2242.3%22%3E75x75%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true"> <img data-src="holder.js/75x75" class="rounded-top" alt="75x75" style="width: 75px; height: 75px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2275%22%20height%3D%2275%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2075%2075%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15a8b4d8120%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15a8b4d8120%22%3E%3Crect%20width%3D%2275%22%20height%3D%2275%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2218.5%22%20y%3D%2242.3%22%3E75x75%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true"> <img data-src="holder.js/75x75" class="rounded-right" alt="75x75" style="width: 75px; height: 75px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2275%22%20height%3D%2275%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2075%2075%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15a8b4d8123%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15a8b4d8123%22%3E%3Crect%20width%3D%2275%22%20height%3D%2275%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2218.5%22%20y%3D%2242.3%22%3E75x75%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true"> <img data-src="holder.js/75x75" class="rounded-bottom" alt="75x75" style="width: 75px; height: 75px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2275%22%20height%3D%2275%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2075%2075%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15a8b4d8125%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15a8b4d8125%22%3E%3Crect%20width%3D%2275%22%20height%3D%2275%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2218.5%22%20y%3D%2242.3%22%3E75x75%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true"> <img data-src="holder.js/75x75" class="rounded-left" alt="75x75" style="width: 75px; height: 75px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2275%22%20height%3D%2275%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2075%2075%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15a8b4d8126%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15a8b4d8126%22%3E%3Crect%20width%3D%2275%22%20height%3D%2275%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2218.5%22%20y%3D%2242.3%22%3E75x75%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true"> <img data-src="holder.js/75x75" class="rounded-circle" alt="75x75" style="width: 75px; height: 75px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2275%22%20height%3D%2275%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2075%2075%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15a8b4d8128%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15a8b4d8128%22%3E%3Crect%20width%3D%2275%22%20height%3D%2275%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2218.5%22%20y%3D%2242.3%22%3E75x75%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true"> <img data-src="holder.js/75x75" class="rounded-0" alt="75x75" style="width: 75px; height: 75px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2275%22%20height%3D%2275%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2075%2075%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15a8b4d812a%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15a8b4d812a%22%3E%3Crect%20width%3D%2275%22%20height%3D%2275%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2218.5%22%20y%3D%2242.3%22%3E75x75%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true"> </div>
                    <h1 class="bd-title" id="content">Colors</h1>
                    <div class="bd-example" data-example-id="">
                        <p class="text-muted">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
                        <p class="text-primary">Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p class="text-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                        <p class="text-info">Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
                        <p class="text-warning">Etiam porta sem malesuada magna mollis euismod.</p>
                        <p class="text-danger">Donec ullamcorper nulla non metus auctor fringilla.</p>
                        <p class="text-white">Etiam porta sem malesuada ultricies vehicula.</p>
                    </div>
                    <div class="bd-example" data-example-id=""> <a href="#" class="text-muted">Muted link</a> <a href="#" class="text-primary">Primary link</a> <a href="#" class="text-success">Success link</a> <a href="#" class="text-info">Info link</a> <a href="#" class="text-warning">Warning link</a> <a href="#" class="text-danger">Danger link</a> </div>
                    <div class="bd-example" data-example-id="">
                        <div class="bg-primary text-white">Nullam id dolor id nibh ultricies vehicula ut id elit.</div>
                        <div class="bg-success text-white">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</div>
                        <div class="bg-info text-white">Maecenas sed diam eget risus varius blandit sit amet non magna.</div>
                        <div class="bg-warning text-white">Etiam porta sem malesuada magna mollis euismod.</div>
                        <div class="bg-danger text-white">Donec ullamcorper nulla non metus auctor fringilla.</div>
                        <div class="bg-inverse text-white">Cras mattis consectetur purus sit amet fermentum.</div>
                        <div class="bg-faded">Cras mattis consectetur purus sit amet fermentum.</div>
                    </div>
                </div>
                
        @include('examples.sidebar-examples', ['currentExample' => $currentExample])

    </div>
</div>
@endsection

@push('scripts')
<script>
$(function() {
    $('[data-toggle="popover"]').popover();
    $('[data-toggle="tooltip"]').tooltip();
    $( 'button.bd-toggle-animated-progress' ).click(function() {
        $( this ).prev().children( '.progress-bar' ).toggleClass( 'progress-bar-animated' );
    });
});
</script>
@endpush

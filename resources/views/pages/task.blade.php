@extends("layouts.app")

@section("title", "Profile")

@section("styles")
<style>
            .task {
    height: 395px;
    overflow: auto;
}

.task_item {
    color: #ffffff;
    display: flex;
    text-align: start;
    align-items: center;
    padding: 10px 70px;
    margin: 10px 0;
    border-radius: 10px;
    background-color: rgba(255, 255, 255, 0.3);
    position: relative;
}

.task_item a {
    color: #ffffff;
    font-size: 25px;
}

.task_item .name {
    position: relative;
    right: 45px;
}

.task_item i {
    font-size: 50px;
    position: relative;
    right: 50px;
    top: 7px;
}

.task_item span {
    position: relative;
    left: 50px;
}
</style>

@endsection

@section("content")
        <x-acc-nav />
        <h1 class="title">Tasks</h1>
        <section class="task">
            <div class="task_block">
                <div class="task_item">
                    <i class="fa-solid fa-film"></i>
                    <div class="name">
                        <a href="">watch video 1</a>
                        <p>1000</p>
                    </div>
                    <span> > </span>
                </div>
                <div class="task_item">
                    <i class="fa-solid fa-film"></i>
                    <div class="name">
                        <a href="">watch video 2</a>
                        <p>1000</p>
                    </div>
                    <span> > </span>
                </div>
                <div class="task_item">
                    <i class="fa-solid fa-film"></i>
                    <div class="name">
                        <a href="">watch video 3</a>
                        <p>1000</p>
                    </div>
                    <span> > </span>
                </div>
                <div class="task_item">
                    <i class="fa-solid fa-film"></i>
                    <div class="name">
                        <a href="">watch video 4</a>
                        <p>1000</p>
                    </div>
                    <span> > </span>
                </div>
                <div class="task_item">
                    <i class="fa-solid fa-film"></i>
                    <div class="name">
                        <a href="">watch video 5</a>
                        <p>1000</p>
                    </div>
                    <span> > </span>
                </div>
                <h1 style="color: #ffffff">Tasks</h1>
                <div class="task_item">
                    <i class="fa-solid fa-film"></i>
                    <div class="name">
                        <a href="">watch video 6</a>
                        <p>5000</p>
                    </div>
                    <span> > </span>
                </div>
                <div class="task_item">
                    <i class="fa-solid fa-film"></i>
                    <div class="name">
                        <a href="">watch video 7</a>
                        <p>3000</p>
                    </div>
                    <span> > </span>
                </div>
            </div>
        </section>
@endsection
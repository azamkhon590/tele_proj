@extends("layouts.app")

@section("title", "home")

@section("styles")
<style>
.score_block {
    display: flex;
}

.score_block img {
    height: 35px;
    width: 40px;
    margin-right: 5px;
}

.score {
    display: flex;
    align-items: center;
    color: #ffffff;
    text-align: center;
    font-size: 25px;
    font-weight: 500;
}

.legau {

    align-items: center;
    color: #c4c4c4;
    margin-top: 5px;
}

section img {
    width: 275px;
    height: 240px;
    margin-top: 30px;
    z-index: 5;
}

.energy_score {
    display: flex;
    justify-content: center;
    align-items: center;
    color: #ffffff;
    text-align: center;
    font-size: 20px;
    font-weight: 400;
}

.line {
    height: 22px;
    width: 250px;
    border-radius: 20px;
    background-color: rgba(255, 255, 255, 0.3);
}
</style>

@endsection

@section("content")
    <header>
        <div class="score_block">
            <img src="Photoroom.png" alt="coin">
            <div class="score">0</div>
        </div>
        <div class="legau">
            <p>Dimond ></p>
        </div>
    </header>
    <section>
        <div class="bar">
            <div class="energy_score"> 0/1000 </div>
            <div class="line"></div>
        </div>
    </section>
    <section>
        <img src="Photoroom.png" alt="coin">
    </section> 
    <livewire:Counter></livewire:Counter>

@endsection
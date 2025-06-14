<div>
<style>
    div{
        height: 100%;
    }
.score_block {
    display: flex;
    justify-content: center;
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
.update {

    align-items: end;
    color: #c4c4c4;
    margin-top: 5px;
}

section img {
    width: 275px;
    height: 240px;
    margin-top: 30px;
    z-index: 5;
}
.bar{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
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
    display: flex;
    justify-content: center;
    align-items: center;
    height: 22px;
    width: 250px;
    border-radius: 20px;
    background-color: rgba(255, 255, 255, 0.3);
}
    .inc{
        border-radius: 50%;
        position: relative;
        left: 35px;
        bottom: 225px;
        width: 200px;
        height: 200px;
        opacity: 0;
    }
</style>
    <h3>{{ auth()->user()->name }}</h3>
    <header>
        <div class="score_block">
            <img src="Photoroom.png" alt="coin">
            <div class="score">{{$count}}</div>
        </div>
        <div class="legau">
            <p>Dimond ></p>
        </div>
        <div class="update">
            <button wire:click="increment">Update</button>
        </div>
    </header>
    <section>
        <div class="bar">
            <div class="energy_score"> {{$count}}/1000 </div>
            <div class="line"></div>
        </div>
    </section>
    <section>
        <img src="Photoroom.png" alt="coin">
    </section>

<button class="inc" wire:click="increment"></button>
</div>

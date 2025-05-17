@extends("layouts.app")

@section("title", "Profile")

@section("styles")
<style>
.stats_item {
    display: flex;
    margin: 25px 80px;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    color: #ffffff;
}

.title {
    color: #ffffff;
    text-align: center;
    margin-top: 25px;
}

.stats_item p {
    font-size: 25px;
}
</style>

@endsection

@section("content")
        
        <section>
            <div class="stats">
                <h1 class="title">Stats</h1>
                <hr>
                <div class="stats_item">
                    <h2>Total Share Balance:</h2>
                    <p>53423489</p>
                </div>
                <div class="stats_item">
                    <h2>Total Share Balance:</h2>
                    <p>53423489</p>
                </div>
                <div class="stats_item">
                    <h2>Total Share Balance:</h2>
                    <p>53423489</p>
                </div>
                <div class="stats_item">
                    <h2>Total Share Balance:</h2>
                    <p>53423489</p>
                </div>
            </div>

        </section>
@endsection
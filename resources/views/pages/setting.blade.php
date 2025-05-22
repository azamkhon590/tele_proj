@extends("layouts.app")

@section("title", "Profile")

@section("styles")
<style>
.settigs_block {
    margin-top: 15px;
}

.settigs_item {
    color: #ffffff;
    display: flex;
    position: relative;
    align-items: center;
    padding: 10px 90px;
    margin: 15px;
    height: 25px;
    width: 175px;
    border-radius: 10px;
    background-color: rgba(255, 255, 255, 0.3);
}

.settigs_item p {
    position: relative;
    right: 60px;
    text-align: start;
    font-size: 25px;
}

.settigs_item span {
    position: relative;
    left: 80px;
}
</style>

@endsection

@section("content")
        <x-acc-nav />
        <section>
            <div class="settings_block">
                <h1 class="title">Settings</h1>
                <hr>
                <div class="settigs_item">
                    <p>Privacy policy</p>
                    <span> > </span>
                </div>
                <div class="settigs_item">
                    <p>Privacy policy</p>
                    <span> > </span>
                </div>
            </div>

        </section>
@endsection
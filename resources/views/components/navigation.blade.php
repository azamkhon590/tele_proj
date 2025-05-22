<style>
    .line {
    height: 22px;
    width: 250px;
    border-radius: 20px;
    background-color: rgba(255, 255, 255, 0.3);
}

.menu {
    display: flex;
    justify-content: space-between;
    position: fixed;
    top: 540px;
}

.btn {
    color: #ffffff;
    height: 80px;
    width: 70px;
    margin: 12px;
    border-radius: 5px;
    display: flex;
    flex-direction: column;
    align-items: center;
    background-color: rgba(255, 255, 255, 0.3);
}

.btn p {
    position: relative;
    top: 10px;
}

i {
    position: relative;
    top: 15px;
    font-size: 25px;
    margin-bottom: 10px;
}
</style>

<div class="menu">
                <li class="menu_item">
                    <a href="/home" class="btn"><i class="fa-solid fa-coins"></i>
                        <p>TAB</p>
                    </a>
                </li>
                <li class="menu_item">
                    <a href="/task" class="btn"><i class="fa-solid fa-list-check"></i>
                        <p>TASK</p>
                    </a>
                </li>
                <li class="menu_item">
                    <a href="/profile" class="btn"><i class="fa-solid fa-user-group"></i>
                        <p>Account</p>
                    </a>
                </li>
                <li class="menu_item">
                    <a href="" class="btn"><i class="fa-solid fa-wallet"></i>
                        <p>DROP</p>
                    </a>
                </li>            
</div>
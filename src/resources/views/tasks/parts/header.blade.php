<style>
    header {
        display: flex;
        justify-content: space-between;
        background-color: #ffff;
        font-size: 15px;
        padding: 0.5rem;
        align-items: center;
        position: fixed;
        width: 100%;
        opacity: 90%;
        padding: 10px;


    }

    form {
        align-items: center;
        margin: 0;
    }

    button {
        background-color: transparent;
        border: none;
        cursor: pointer;
        outline: none;
        appearance: none;
        font-size: 100%;
        padding-right: 30px;
    }

    .userName {
        font-size: 100%;
    }
</style>

<header>
    <div class="userName">{{ $user->name}}さん</div>

    <div class="logout">
        <form action="{{ route('logout') }}" method="POST" name="logout" id="logout">
            <input type="hidden" name="_token" form="logout" value="{{ csrf_token() }}" />
            <button type="submit" form="logout">ログアウト</button>

        </form>
    </div>



</header>
<x-app-layout>
    <main class="container">
        <section class="card border-0 shadow card-body ">
            <div class="center-row bg-light p-3 rounded">
                {{-- <h3 class="">user name</h3>--}}
                <form class="center-row">
                    <label>
                    <textarea class="form-text text-success fw-bold m-0 border-0 rounded-md input-group" rows="1" cols="50"
                              placeholder="write what you are thinking"></textarea>
                    </label>
                    <button class="btn btn-success">Post</button>
                </form>
            </div>
            <ul class="posts mt-4">
                <li class="post card card-body">
                    <div class="justify-start-row">
                        <img src="{{asset("img/boy.png")}}" width="30" alt="image user">
                        <h3 class="name">post's user name</h3>
                    </div>
                    <h1 class="body bg-light text-success rounded fw-bold py-1 px-1">post body</h1>
                    <ul class="comments">
                        <li class="comment justify-start-row">
                            <h6>user name</h6>
                            <p>comment 1 text </p>
                        </li>
                        <li class="comment justify-start-row">
                            <h6>user name</h6>
                            <p>comment 2 text </p>
                        </li>
                    </ul>
                    <label class="justify-start-row">
                        <input type="text" class="border-0 rounded bg-light" placeholder="..........">
                        <button class="btn btn-outline-primary ">comment</button>
                    </label>
                </li>
            </ul>
        </section>
    </main>
</x-app-layout>



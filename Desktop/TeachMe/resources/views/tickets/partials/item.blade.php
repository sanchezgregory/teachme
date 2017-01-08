<div data-id="25" class="well well-sm">
    <h4 class="list-title">
        {{ ticket->title }}
        <span class="label label-info"> {{ $ticket->status }}</span>
    </h4>

    <p>

        {--
            <a href="#" class="btn btn-primary" title="Votar por este tutorial">
                <span class = "glyphicon glyphicon-thumbs-up"></span>Votar
            </a>
            <a href="#" class="btn btn-danger">
                <span class = "glyphicon glyphicon-thumbs-up"></span>No Votar
            </a>
        --}
        <a href="#">
            <span class="votes-count">12 votos</span>
            - <span class="comments-count"> 0 comentarios</span>
        </a>
    </p>
    <p class="date-t">
        <span class="glyphicon glyphicon-time"></span> 16/11/2016
    </p>
</div>

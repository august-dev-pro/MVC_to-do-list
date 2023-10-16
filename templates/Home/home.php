<link rel="stylesheet" href="../main/style.css">

<body>
    <h1>To Do List</h1>
    <div class="fom_container">
        <form class="form" action="/" method="post">
            <div class="form_title">
                <h2>Ajoutez une tache</h2>
            </div>
            <div class="form_input">
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" placeholder="Nom de la taches" required>
            </div>
            <div class="form_input">
                <label for="description">Description</label>
                <textarea id="area" name="description" id="description"
                    aria-placeholder="Description detaillé de la tache" cols="20" rows="10" required></textarea>
            </div>
            <div class="form_input">
                <label for="temps">Durée maxi pour la tache</label>
                <input type="date" name="temps" id="temps">
            </div>

            <button id="btn" type="submit" name="addTask">Ajoutez la tache</button>
        </form>

        <div class="form">
            <div class="tasks_container">
                <?php foreach ($tasks as $task) { ?>
                <div class="task">
                    <h3>
                        <?= $task->getNom() ?>
                    </h3>
                    <p>
                        <?= $task->getDescription() ?>
                    </p>
                    <div class="lastTime">
                        <div>
                            <?= $task->getTemps() ?>
                        </div>
                    </div>
                </div>

                <form method='post' action='/'>
                    <input type='hidden' name='id' value="<? $task->getId() ?>">
                    <button type='submit' name="deleteTask">suprimer</button>
                </form>
                <?php } ?>
            </div>
        </div>
    </div>


</body>

</html>

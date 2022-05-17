<?php include 'head.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4 mt-5">
            <h4 class="text-center bg-secondary">New Topic</h4>
            <form class="row g-3" method="POST">
                <div class="col-md-6">
                    <label for="input" class="form-label">Title</label>
                    <input type="text" name="t_title" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="inputState" class="form-label">Category</label>
                    <select id="inputState" class="form-select">
                        <option selected>Choose..</option>
                        <option>Hip Pop</option>
                        <option>Pop</option>
                        <option>Drill</option>
                    </select>
                </div>
                <div class="col-12">
                    <label for="inputState" class="form-label">Category</label>
                    <select id="inputState" class="form-select">
                        <option selected>Choose..</option>
                        <option>Trap</option>
                        <option>Rap / Old School</option>
                        <option>R&B</option>
                        <option>Pop Rock</option>
                        <option>Latin Pop</option>
                        <option>Uk Drill</option>
                        <option>Jersey Concept</option>
                    </select>
                </div>
                <div class="col-12">
                    <label for="inputState" class="form-label">Message</label>
                    <textarea class="form-control" name="t_content" aria-label="With textarea" placeholder="Share your opinion here !"></textarea>
                </div>
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" name="t_mail" for="gridCheck">
                            Notify me of replies by email
                        </label>
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" name="t_submit" value="Post Topic" class="btn btn-outline-secondary">Post</button>
                </div>
                <?php if(isset($terror)) {
                echo $terror; }
                ?>
            </form>
        </div>
        <div class="col-4"></div>
    </div>
</div>

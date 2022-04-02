<h1>Register</h1>

<form action="" method="post">
    <div class="row mb-3">
        <div class="col">
            <div class="form-group">
                <label for="firstname" class="form-label">First Name</label>
                <input type="text" class="form-control" name="firstname" id="firstname">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="lastname" class="form-label">Last Name</label>
                <input type="text" class="form-control" name="lastname" id="lastname">
            </div>
        </div>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" id="email">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="password">
    </div>
    <div class="mb-3">
        <label for="confirmPassword" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" name="confirmPassword" id="confirmPassword">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
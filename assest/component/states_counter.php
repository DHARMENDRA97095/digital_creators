<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Stats Counter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="/assest/css/style.css">
</head>

<body>

    <section class="stats-section">
        <div class="container">
            <div class="row text-center g-4">

                <div class="col-lg-3 col-md-6">
                    <div class="stat-box">
                        <i class="bi bi-people-fill"></i>
                        <h2 class="counter" data-target="100">0</h2>
                        <p>Happy Clients</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="stat-box">
                        <i class="bi bi-diagram-3-fill"></i>
                        <h2 class="counter" data-target="200">0</h2>
                        <p>Projects Completed</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="stat-box">
                        <i class="bi bi-award-fill"></i>
                        <h2 class="counter" data-target="5">0</h2>
                        <p>Years Experience</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="stat-box">
                        <i class="bi bi-rocket-takeoff-fill"></i>
                        <h2 class="counter" data-target="50">0</h2>
                        <p>Team Members</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <script src="script.js"></script>
    <script>
        const counters = document.querySelectorAll(".counter");

        counters.forEach(counter => {
            counter.innerText = "0";

            const updateCounter = () => {
                const target = +counter.getAttribute("data-target");
                const current = +counter.innerText;

                const increment = Math.ceil(target / 100);

                if (current < target) {
                    counter.innerText = current + increment;
                    setTimeout(updateCounter, 20);
                } else {
                    counter.innerText = target + "+";
                }
            };

            updateCounter();
        });
    </script>
</body>

</html>
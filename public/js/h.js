const obsEl = document.getElementById("obs-el");

        new IntersectionObserver((entries) => {
            obsEl.style.setProperty(
                "--underline-width",
                entries[0].isIntersecting ? "100%" : "0%"
            );
        }).observe(obsEl);

        const obsEl1 = document.getElementById("obs-el1");

        new IntersectionObserver((entries) => {
            obsEl1.style.setProperty(
                "--underline-width",
                entries[0].isIntersecting ? "100%" : "0%"
            );
        }).observe(obsEl1);
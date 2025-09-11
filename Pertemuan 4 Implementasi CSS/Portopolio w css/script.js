document.addEventListener("DOMContentLoaded", () => {
  // Spotlight effect
  const spotlight = document.getElementById("spotlight");
  window.addEventListener("mousemove", (e) => {
    spotlight.style.setProperty("--x", e.clientX + "px");
    spotlight.style.setProperty("--y", e.clientY + "px");
  });

  // Command palette
  const cmdPalette = document.getElementById("cmd-palette");
  const cmdInput = document.getElementById("cmd-input");
  const cmdResults = document.getElementById("cmd-results");
  const openCmdBtn = document.getElementById("open-cmd");

  const sectionsCmd = [
    { id: "about", label: "Tentang" },
    { id: "projects", label: "Proyek" },
    { id: "links", label: "Tautan" },
    { id: "contact", label: "Kontak" },
  ];

  function openCmd() {
    cmdPalette.classList.remove("hidden");
    cmdInput.value = "";
    cmdInput.focus();
    renderResults(sectionsCmd);
  }
  function closeCmd() {
    cmdPalette.classList.add("hidden");
  }

  openCmdBtn.addEventListener("click", openCmd);
  window.addEventListener("keydown", (e) => {
    if (e.metaKey && e.key.toLowerCase() === "k") {
      e.preventDefault();
      if (cmdPalette.classList.contains("hidden")) openCmd();
      else closeCmd();
    } else if (e.key === "Escape") {
      closeCmd();
    }
  });

  cmdInput.addEventListener("input", () => {
    const q = cmdInput.value.toLowerCase();
    renderResults(
      sectionsCmd.filter((s) => s.label.toLowerCase().includes(q))
    );
  });

  function renderResults(items) {
    cmdResults.innerHTML = "";
    if (items.length === 0) {
      cmdResults.innerHTML = "<li>Tidak ada hasil</li>";
      return;
    }
    items.forEach((item) => {
      const li = document.createElement("li");
      li.textContent = item.label;
      li.onclick = () => {
        document.getElementById(item.id).scrollIntoView({ behavior: "smooth" });
        closeCmd();
      };
      cmdResults.appendChild(li);
    });
  }

  // Intersection Observer for Navbar Active State
  const sections = document.querySelectorAll("section");
  const navLinks = document.querySelectorAll(".nav-link");

  const observerOptions = {
    root: null,
    rootMargin: "0px",
    threshold: 0.5,
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        navLinks.forEach((link) => {
          link.classList.remove("active");
          if (link.getAttribute("href").substring(1) === entry.target.id) {
            link.classList.add("active");
          }
        });
      }
    });
  }, observerOptions);

  sections.forEach((section) => {
    observer.observe(section);
  });

  // Intersection Observer for Scroll Animations
  const revealElements = document.querySelectorAll(".reveal");

  const revealObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add("visible");
            observer.unobserve(entry.target);
        }
    });
  }, { threshold: 0.1 });

  revealElements.forEach(element => {
    revealObserver.observe(element);
  });
});
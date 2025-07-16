function animateValue(element, start, end, duration) {
  const startNum = parseInt(start.toString().replace(/,/g, ""));
  const endNum = parseInt(end.toString().replace(/,/g, ""));
  const range = endNum - startNum;
  let startTimestamp = null;

  function step(timestamp) {
    if (!startTimestamp) startTimestamp = timestamp;
    const progress = Math.min((timestamp - startTimestamp) / duration, 1);
    const currentValue = Math.floor(progress * range + startNum);
    element.textContent = currentValue.toLocaleString();
    if (progress < 1) {
      window.requestAnimationFrame(step);
    }
  }
  window.requestAnimationFrame(step);
}

document.addEventListener("DOMContentLoaded", () => {
  const section = document.getElementById("impact-section");
  if (!section) return;

  const countersData = JSON.parse(
    section.getAttribute("data-counters") || "{}"
  );
  const counters = section.querySelectorAll(".counter");

  counters.forEach((counter) => {
    counter.textContent = "0";
  });

  const observer = new IntersectionObserver(
    (entries, obs) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          counters.forEach((counter, i) => {
            const key = counter.getAttribute("data-counter-key");
            if (key && countersData[key]) {
              setTimeout(() => {
                animateValue(counter, 0, countersData[key], 2000);
              }, i * 150);
            }
          });
          obs.disconnect();
        }
      });
    },
    {
      threshold: 0.1,
    }
  );

  observer.observe(section);
});

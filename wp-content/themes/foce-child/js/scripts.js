// ---------- Title Scroll ----------

// Remove the transition class
const titleStory = document.querySelector('.title-story');
titleStory.classList.remove('title-story');
const titleStudio = document.querySelector('.title-studio');
titleStudio.classList.remove('title-studio');

function titleObserver(classAnim, classObserve, nameConst){

  // Create the observer :
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      // If the element is visible
      if (entry.isIntersecting) {
        // Add the animation class
        nameConst.classList.add(classAnim);
        return;
      }
      // We're not intersecting, so remove the class!
      nameConst.classList.remove(classAnim);
    });
  });
  
  // Tell the observer which elements to track
  observer.observe(document.querySelector(classObserve));
}

titleObserver('title-story','.observe-story', titleStory);
titleObserver('title-studio','.observe-studio', titleStudio);


// ----------  ----------
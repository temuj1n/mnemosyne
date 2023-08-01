<script src="js/fontawesome.js"></script>

<script>
const currentPage = location.href;
const allAs = document.querySelectorAll('a');
const enfants = document.querySelectorAll('[id=sub-element]');
const daron = document.getElementById('parent');
const allAsLength = allAs.length;
const enfantsLength = enfants.length;

for (let i = 0; i < allAsLength; i++) {
  if ( allAs[i].href === currentPage ) {
    allAs[i].className = "current";
      }
}

for (let i = 0; i < enfantsLength; i++) {
  if ( enfants[i].className === "current" ) {
    daron.className = "current";
      }
}

function findAncestor (el, cls) {
    while ((el = el.parentElement) && !el.classList.contains(cls));
    return el;
}
</script>

<footer>
    <a class="copyright" href="https://ahcarrement.fr" target="_blank">
        <span class="icone"><i class="fas fa-skull-crossbones" aria-hidden="true"></i></span>
        <span class="titre">@ahcarrement</span>
        </a>
</footer>
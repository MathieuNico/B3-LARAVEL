<x-nav-link>
</x-nav-link>

<div class="container">
    @if ($revenutotal < 15000)
        <p>Tu es un régime micro-foncier, tu dois donc inscrire {{$revenutotal}} dans la case case 4 BE déclaration n°2042</p>
        <p> Sur quel montant sera tu imposé ? {{$revenutotal * 0.70}}</p>
    @else
        <p>Tu es un régime réél, tu dois inscrire {{$revenutotal}} case 4 BA déclaration n°2044</p>
        <p> Sur quel montant sera tu imposé ? {{$revenutotal}}</p>
        <p>voila</p>
    @endif
</div>
@extends('layouts.app')
    @section('bg')
        <img src="{{ asset('img/gamebg.png') }}" width="100%" height="auto">
    @endsection

    @section('content')
        <h1 class="pt-4">O MaetsApp</h1>
        <div class="pt-4">
            <h3>Idea Projektu</h3>
            <p>Projekt powstał z założenia w celu stworzenia aplikacji/systemu pod baze danych stworzoną na rzecz projektu szkolnego z Baz Danych.</p>
            <p>Z założenia nasz zespół złożony z trzech programistów chciał przedstawić działanie frameworka Laravel, odmienne podejście do bazy danych. Wykonywanie zapytań za pomocą specjalnych
            poleceń query Builder'a, oraz pokazać łatwość tworzenia aplikacji Webowych po zapoznaniu z dokumentacją w/w framework'a.</p>
        </div>
        <div class="pt-4">
            <h3>Dlaczego ten framework?</h3>
            <p>Framework wybraliśmy w oparciu o jego popularność na rynku jak i optymalizację, dynamiczność działania oraz ciekawy system bazy danych.</p>
            <p>Framework Laravel ostatnimi czasy jest jednym z najpopularniejszych frameworkow pod aplikacje Webowe na światowym rynku, nie bez przyczyny, jego system jest bardzo
            dobrze zbudowany, podział w modelu MVC (Model View Controller) oddziela nam Logikę, Baze, Frontend. Jak chodzi o to ostatnie to Frontend tez pozwala na bardzo
            dynamiczne budowanie layoutu strony poprzed kilka plików składowych, dla przykładu ta podstrona 'About us' jest zbudowana na 3 plikach 'views', pliku layoutu który zawiera
            podstawowe informacje z bloku [HEAD] strony, oraz uklad w który wkładamy inne pliki, drugim plikiem składowym jest plik 'nav' który zawiera całe menu nawigacji
            trzecim zaś jest ten plik który zawiera tą treść. Składając te pliki mamy łatwość edycji np Navigacji w oddzielnym pliku, bądź tworzenia nowych podstron
            implementując poprostu nasz layout i navigację, oraz tworząc tylko i wyłącznie content danej podstrony</p>
        </div>
        <div class="pt-4">
            <h3>Coś wiecej o danych?</h3>
            <p>Czyli kontrolery oraz modele, co mają w sobie ciekawego?</p>
            <p>Każdy model zawiera strukture danej tabeli bazy danych i sam w sobie obejmuje JEDEN rekord z tej tabeli, za pomocą kontrolera zaś wywołujemy np pentlę na modelu który przedstawi nam
            wszystkie rekordy z tej tabelki. Bądź nadajemy mu jakieś wytyczne np WHERE i wypisuje nam rekord/y z spełnieniem naszego WHERE'a </p>
        </div>
    @endsection

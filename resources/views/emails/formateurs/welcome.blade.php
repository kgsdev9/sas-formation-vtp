<x-mail::message>
# Introduction

Vous recevez une notification car un nouveau Formtareur vient d'etre créé sur notre plateforme.
Connectez vous à l'application pour voir l'action
<x-mail::button :url="''">
Consulter
</x-mail::button>

Cordilament,<br>
{{ config('app.name') }}
</x-mail::message>

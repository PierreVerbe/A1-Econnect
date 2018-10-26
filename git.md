# GIT

## Paramétrages

**Pour initialiser votre email et nom :**

```sh
git config --global user.name "Bastien Marais"
git config --global user.email "marais.bas@gmail.com"
```

**Pour stocker ses login/mdp et ne plus avoir a les noter :**

```sh
git config --global credential.helper store
```

**Pour supprimer ses login/mdp stockés :**

```sh
git config --global credential.helper erase
```

**Pour avoir la coloration de certaines commandes :**

```sh
git config --global color.diff auto
git config --global color.status auto
git config --global color.branch auto
```

## Commandes usuelles

**Pour récup le dépot :**

```sh
git clone URL_REPO
```

**Pour se mettre à jour :**

```sh
git pull
```

**Pour ajouter vos modifs :**

```sh
git add .
git commit -am "message du commit"
git push
```

**Pour savoir les fichiers modifiés :**

```sh
git status
```

**Pour avoir le détails des modifications :**

```sh
git diff
```

## Branches

**Pour créer une branche :**

```sh
git checkout NOUVELLE_BRANCHE
```

**Pour changer de branche :**

```sh
git checkout NOM_BRANCHE_VOULUE
```

**Pour fusionner sa branche avec une autre branche :**

```sh
git merge AUTRE_BRANCHE
```

**Pour afficher toutes les branches :**

```sh
git branch -r
```
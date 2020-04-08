# Welcome To TinyPost

A very simple online boards app.

## Why does this exist

There is not enough bad PHP out there and this project aims to add wordpress levels of horror to the web.

## Rules

- NO JAVASCRIPT!!!
- Only datastore allowed is sqlite
- Single Server App, it better not scale.
- Use autoloading and DI. We aren't monsters.
- Frontend is HTML and CSS only.
- NO EXTERNAL CODE.

## Architecture... or the lack thereof

- All infrastructure code goes into the `framework` directory.
- All application code goes in `src`

## Roadmap

### Stage Uno

- [ ] Create DI container
- [ ] Create Router
- [ ] Create Query builder
- [ ] Create the templating thing, views
- [ ] Create basic controller logic

### Stage Two

- Create Home View
- Users can add posts
- Users can comment on posts (one level deep)
- Users can vote posts up or down

## Stage Tres

- ????
- Profit

# NICEPRESS 

## Plan: 

1

## Entities:

- `User`:
    
    __fields__
    - first_name
    - last_name
    - nickname*
    - login
    - email
    - phone

    __relations__
    * @-> editions(~*)
    * @-> teams(~*)
    * @-> rosters(~*)
    * @-> chats(~*)
    * @-> contacts(~*)
    * @-> posts(~*)
    * @-> likes(~*)
    * @-> followers(~*)
    * @-> following(~*)    
    * @-> favorites(~*)


- `Team`
- `Edition`
    
    __fields__
    - name
    - about
    
    __relations__
    - @-> roster (~roster_id)
    - @-> team (~team_id)
    - @-> type (~type_id)
    - @-> publications (~*)
    - @-> drafts (~*)

- `EditionPublication`
- `EditionPublicationSection`
- `EditionDraft`
- `EditionType`
- `EditionRoster`
- `EditionRosterMember`
    
    __relations__
    - @-> roster (~roster_id)
    - @-> role (~role_id)

- `EditionRosterRole`

    - name

- `Chat`
- `Message`
- `Contact`
- `Post`
- `Like`
- `Follow`
- `Favorite`


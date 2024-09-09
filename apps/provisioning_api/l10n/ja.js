OC.L10N.register(
    "provisioning_api",
    {
    "Logged in account must be an administrator or have authorization to edit this setting." : "ログインアカウントは管理者であるか、この設定を編集する権限を持っている必要があります。",
    "Could not create non-existing user ID" : "存在しないユーザIDを作成できませんでした",
    "User already exists" : "ユーザは既に存在する",
    "Group %1$s does not exist" : "グループ %1$s は存在しません",
    "Insufficient privileges for group %1$s" : "グループ %1$s の権限が不十分です",
    "No group specified (required for sub-admins)" : "グループが指定されていません（サブ管理者に必要です）",
    "Sub-admin group does not exist" : "サブ管理者グループは存在しません",
    "Cannot create sub-admins for admin group" : "管理者グループにサブ管理者を作成することはできません",
    "No permissions to promote sub-admins" : "権限がないため、サブ管理者を昇格させることはできません",
    "Invalid password value" : "無効なパスワード値",
    "To send a password link to the user an email address is required." : "ユーザーにパスワードのリンクを送信するには、メールアドレスが必要です。",
    "Required email address was not provided" : "必要のEメールアドレスが提供されていません",
    "Invalid quota value: %1$s" : "無効なクォータ値: %1$s",
    "Invalid quota value. %1$s is exceeding the maximum quota" : "無効なクォータ値。%1$sは最大クォータを超えています",
    "Unlimited quota is forbidden on this instance" : "このインスタンスでは無制限のクォータは禁止されています。",
    "Setting the password is not supported by the users backend" : "パスワードの設定は、ユーザ・バックエンドではサポートされていません",
    "Invalid language" : "無効な言語",
    "Invalid locale" : "無効なロケール",
    "Invalid first day of week" : "無効な週の最初の曜日",
    "Cannot remove yourself from the admin group" : "管理者グループから自分自身を削除することはできません",
    "Cannot remove yourself from this group as you are a sub-admin" : "あなたはサブ管理者であるため、このグループから自分を削除することはできません",
    "Not viable to remove user from the last group you are sub-admin of" : "あなたがサブ管理者である最後のグループからユーザを削除することはできません",
    "User does not exist" : "ユーザは存在しません",
    "Group does not exist" : "グループは存在しません",
    "User is not a sub-admin of this group" : "ユーザはこのグループのサブ管理者ではありません。",
    "Email address not available" : "Eメールアドレスは利用できません",
    "Sending email failed" : "Eメールの送信に失敗しました",
    "Email confirmation" : "Eメールの確認",
    "To enable the email address %s please click the button below." : "メールアドレス %s を有効にするには、下のボタンをクリックしてください。",
    "Confirm" : "承認",
    "Email was already removed from account and cannot be confirmed anymore." : "メールアドレスはすでにアカウントから削除されており、確認できません。",
    "Could not verify mail because the token is expired." : "トークンの有効期限が切れているため、メールを検証できませんでした。",
    "Could not verify mail because the token is invalid." : "トークンが無効なため、メールを検証できませんでした。",
    "An unexpected error occurred. Please contact your admin." : "予期せぬエラーが発生しました。管理者に連絡してください。",
    "Email confirmation successful" : "Eメールの確認が成功しました",
    "Provisioning API" : "プロビジョニングAPI",
    "This application enables a set of APIs that external systems can use to manage accounts, groups and apps." : "このアプリケーションは、外部システムがアカウント、グループ、アプリを管理するために使用できる一連のAPIを有効にします。",
    "This application enables a set of APIs that external systems can use to create, edit, delete and query account\n\t\tattributes, query, set and remove groups, set quota and query total storage used in Nextcloud. Group admin accounts\n\t\tcan also query Nextcloud and perform the same functions as an admin for groups they manage. The API also enables\n\t\tan admin to query for active Nextcloud applications, application info, and to enable or disable an app remotely.\n\t\tOnce the app is enabled, HTTP requests can be used via a Basic Auth header to perform any of the functions\n\t\tlisted above. More information is available in the Provisioning API documentation, including example calls\n\t\tand server responses." : "このアプリケーションは、外部システムがNextcloudでアカウント属性を作成、編集、削除、クエリしたり、\n\t\tグループをクエリしたり、設定したり、削除したり、クォータを設定したり、使用されている総ストレージを\n\t\tクエリしたりするために使用できる一連のAPIを有効にします。グループ管理アカウントは、管理している\n\t\tグループに対して管理者と同じ機能を実行することができるだけでなく、Nextcloudをクエリすることもできます。\n\t\tこのAPIはまた、管理者がアクティブなNextcloudアプリケーションやアプリケーション情報をクエリし、アプリを\n\t\tリモートで有効または無効にすることも可能にします。アプリが有効になると、上記にリストされている機能を\n\t\t実行するために、Basic Authヘッダーを介したHTTPリクエストを使用することができます。詳細な情報や\n\t\tサンプルの呼び出し、サーバーからの応答などは、Provisioning APIのドキュメントで確認できます。",
    "Logged in user must be an administrator or have authorization to edit this setting." : "ログインユーザーは、管理者またはこの設定を編集する権限を持っている必要があります。",
    "This application enables a set of APIs that external systems can use to manage users, groups and apps." : "このアプリケーションは、外部システムがユーザー、グループ、アプリを管理するために使用できる一連のAPIを有効にします。",
    "This application enables a set of APIs that external systems can use to create, edit, delete and query user\n\t\tattributes, query, set and remove groups, set quota and query total storage used in Nextcloud. Group admin users\n\t\tcan also query Nextcloud and perform the same functions as an admin for groups they manage. The API also enables\n\t\tan admin to query for active Nextcloud applications, application info, and to enable or disable an app remotely.\n\t\tOnce the app is enabled, HTTP requests can be used via a Basic Auth header to perform any of the functions\n\t\tlisted above. More information is available in the Provisioning API documentation, including example calls\n\t\tand server responses." : "このアプリケーションにより、外部システムがユーザーの作成、編集、削除、クエリに使用できる一連のAPIが有効になります\n\t\t属性やクエリ、グループの設定と削除、クォータの設定、Nextcloudのストレージの容量チェック。グループ管理者ユーザーも\n\t\tNextcloudにクエリを実行し、管理者と同じ機能を管理するグループに実行することもできます。 APIではまた管理者が\n\t\tアクティブなNextcloudアプリケーション、アプリケーション情報を照会し、アプリをリモートで有効または無効にできます。\n\t\tこのアプリを有効にすると、基本認証ヘッダーを介したHTTPリクエストを使用して、上記の任意の機能を実行できます\n\t\t呼び出しの例など、詳細やサンプルの呼び出し方法、サーバーからの応答については、\n\t\tProvisioningAPIのドキュメントをご覧ください。"
},
"nplurals=1; plural=0;");

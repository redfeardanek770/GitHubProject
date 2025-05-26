<?php
$repo = "GitHubProject";
$username = "username_or_email";

if ($github_user) {
    $github_api_url = "https://api.github.com/repos/$username/$repo";
    $response = file_get_contents($github_api_url);

    if ($response !== false) {
        echo $response;
    } else {
        echo "Failed to fetch the repository information.";
    }
} else {
    echo "Please provide a username or email for the GitHub project.";
}
?>

<?php

declare(strict_types=1);

namespace Ghostwriter\AutomatedRepositoryManager\Interface;

interface GitHubCliInterface extends GitHubInterface
{
}

// gh repo list {ORG|USER} --json 'id,nameWithOwner,defaultBranchRef,isFork,isTemplate,latestRelease,repositoryTopics,isArchived,visibility,url'

//gh pr create --base {defaultBranchRef} --head origin:feature-branch --title 'Update dependencies' --body 'This patch updates dependencies' --label 'Automated'

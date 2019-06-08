# geetoPod - Pure PHP Client Example

## Install Google Cloud Console to MacOS

Ref. [Quickstart for macOS](https://cloud.google.com/sdk/docs/quickstart-macos)

Install Kubectl:
```
gcloud components install kubectl

gcloud auth configure-docker
```

## Deploy to GCP

Modify folowing lines in d-exec.sh:
```
export defaultGcpProject=geetopod
export defaultGcpCluster=geetopod
export defaultGcpZone=us-central1-a
```

Modify following lines in config.php
```
$g_config['domain'] = 'ceg-purephp.geetopod.com';

$g_config['gateway.url'] = 'http://gw.geetopod.com';
$g_config['web.url'] = 'http://ceg-purephp.geetopod.com';
$g_config['company'] = 'geetopod-developers';

```

Modify following lines in deploy-to-gcp.yaml:
```
    spec:
      containers:
      - image: gcr.io/geetopod/geetopod-client-example-purephp:0.1.3

```
==> Modify geetopod with GCP project name, 0.1.3 with build version

Run: (for example version is 0.1.3)
```
./d-exec.sh build 0.1.3

./d-exec.sh pushtogcp 0.1.3

./d-exec.sh deploytogcp 0.1.3
```

import urllib.request
import json

data = {
        "Inputs": {
                "input1":
                [
                    {
                            'a_name': "PJ Harvey",   
                            'title': "50 Ft Queenie",   
                            'tempo': "126.366",   
                            'energy': "0.667",   
                            'danceability': "0.382",   
                            'loudness': "-16.077",   
                            'valence': "0.718",   
                            'acousticness': "0.000652",   
                            'Mood': "Angry",   
                    }
                ],
        },
    "GlobalParameters":  {
    }
}

body = str.encode(json.dumps(data))

url = 'https://ussouthcentral.services.azureml.net/workspaces/ad9b36a5ce834694a9f8850cef897196/services/6e5a6fbeee814d898c713a9c5a1cff34/execute?api-version=2.0&format=swagger'
api_key = 'LjQX1szCBgIHCu+2cC03YLisbTgSnX7b9O0YXj7R9IQW4URb7d/W+hLmc1MwBUfdbYxaQZHlh0Xd8PAUOI47rQ==' # Replace this with the API key for the web service
headers = {'Content-Type':'application/json', 'Authorization':('Bearer '+ api_key)}

req = urllib.request.Request(url, body, headers)

try:
    response = urllib.request.urlopen(req)

    result = response.read()
    
    print(result)
except urllib.error.HTTPError as error:
    print("The request failed with status code: " + str(error.code))

    # Print the headers - they include the requert ID and the timestamp, which are useful for debugging the failure
    print(error.info())
    print(json.loads(error.read().decode("utf8", 'ignore')))
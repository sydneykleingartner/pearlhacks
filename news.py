from lib.google_search_results import GoogleSearchResults

params = {
    "q" : "women in computer science news",
    "hl" : "en",
    "gl" : "us",
    "google_domain" : "google.com",
    "showParameters" : "true",
    "num" : "50",
}

query = GoogleSearchResults(params)
dictionary_results = query.get_dictionary()
